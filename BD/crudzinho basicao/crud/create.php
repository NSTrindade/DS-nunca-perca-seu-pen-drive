
<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
    $stmt->execute([$nome, $email]);
    echo "Usuário inserido com sucesso!";
}
?>
<form method="post">
    Nome: <input type="text" name="nome" required><br>
    Email: <input type="email" name="email" required><br>
    <button type="submit">Cadastrar</button>
</form>