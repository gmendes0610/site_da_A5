<?php
require_once 'conecta.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf   = $_POST['cpf'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Prepara a consulta de forma segura contra SQL Injection
    $stmt = $conn->prepare("SELECT id, nome FROM aluno WHERE cpf = ? AND senha = ?");
    $stmt->bind_param("ss", $cpf, $senha);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $aluno = $resultado->fetch_assoc();
        echo "<h3>Bem-vindo(a), " . htmlspecialchars($aluno['nome']) . "!</h3>";
        echo "<a href='lista.php'>Ir para a lista de alunos</a>";
    } else {
        echo "<h3>CPF ou senha inválidos!</h3>";
        echo "<a href='index.php'>Tentar novamente</a>";
    }

    $stmt->close();
}
$conn->close();
?>