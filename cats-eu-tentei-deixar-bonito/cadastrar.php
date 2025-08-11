<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style2.css">
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
    <h2>Cadastre-se!</h2>
    <!-- Adicionando formulário de cadastro com 3 campos -->
     <p>Já tem conta? <a href="login.php">Faça login!</a></p>
    <form action="processa_cadastro.php" method="POST" class="formulario">
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="senha" placeholder="Senha" required><br><br>
        <input type="password" name="confirma_senha" placeholder="Confirme a Senha" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
    </div>

</body>

</html>
