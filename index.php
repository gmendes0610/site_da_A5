<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login do Aluno</title>
</head>
<body>
    <h2>Acesso ao Sistema</h2>
    <form action="login.php" method="POST">
        <label>CPF:</label><br>
        <input type="text" name="cpf" maxlength="11" required><br><br>
        
        <label>Senha:</label><br>
        <input type="password" name="senha" maxlength="8" required><br><br>
        
        <button type="submit">Entrar</button>
    </form>
    <br>
    <a href="lista.php">Ver lista de alunos</a>
</body>
</html>