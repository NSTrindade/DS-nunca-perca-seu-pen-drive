<?php
include 'db.php';
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nome = $_POST['nome'];
$email = $_POST['email'];
$stmt = $pdo->prepare("UPDATE usuarios SET nome = ?, email = ? WHERE id = ?");
$stmt->execute([$nome, $email, $id]);
echo "Usuário atualizado!";
echo "<br><a href='read.php'>Voltar</a>";
exit;
}
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
$stmt->execute([$id]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<form method="post">
Nome: <input type="text" name="nome" value="<?= $usuario['nome'] ?>"><br>
Email: <input type="email" name="email" value="<?= $usuario['email'] ?>"><br>
<button type="submit">Atualizar</button>
</form>