<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
<header>
<div class="meuToggle">
  <div class="toggle"></div>
  <div class="toggle1"></div>
  <div class="toggle"></div>
</div>
<img src="/cats/img/logo.png">
</header>
    <div class="centrologin">
    <h2>Login</h2>
    <p>Novo Usuário?<a href="cadastrar.php"> Crie uma conta!</a></p>
    <form action="processa_login.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        <label>Senha:</label>
        <input type="password" name="senha" required><br><br>
        <button type="submit">Logar</button>
    </form>
    </div>

</body>

</html>