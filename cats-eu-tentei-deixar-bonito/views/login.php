<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/style1.css">
</head>

<body>
<header>
<img src="../assets/logo.png">
<div class="menuToggle">
            <div class="toggle"></div>
</div>

</header>
    <div class="centrologin">
    <h2>Login</h2>

    <p>Novo usuário? <a href="../views/cadastrar.php">Cria uma conta!</a></p>
    <form action="../controllers/processa_login.php" method="POST" class="formulario">
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="senha" placeholder="Senha" required><br><br>
        <button type="submit">Logar</button>
    </form>
    </div>
<script src="../scripts/login.js"></script>
</body>

</html>
