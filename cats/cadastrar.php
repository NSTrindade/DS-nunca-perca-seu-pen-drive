<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>

<body>
    <h2>Cadastre-se</h2>
    <form action="processa_cadastro.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        <label>Senha:</label>
        <input type="password" name="senha" required><br><br>
        <label>Confirme a senha:</label>
        <input type="password" name="confirmar_senha" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
    <p><a href="login.php">Já tem conta? Faça login</a></p>
</body>

</html>