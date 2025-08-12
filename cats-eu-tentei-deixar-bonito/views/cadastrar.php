<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../styles/style2.css">
</head>

<body>
<header>
<img src="../assets/logo.png">
<div class="menuToggle">
            <div class="toggle"></div>
</div>

</header>
    <div class="centrologin">
    <h2>Cadastre-se!</h2>
     <p>Já tem conta? <a href="../views/login.php">Faça login!</a></p>
     <form action="../controllers/processa_cadastro.php" method="POST" class="formulario">
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="senha" placeholder="Senha" required><br><br>
        <input type="password" name="confirmar_senha" placeholder="Confirme a Senha" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
    </div>
    <script src="../scripts/login.js"></script>
</body>

</html>
