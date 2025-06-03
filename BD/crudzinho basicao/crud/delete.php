<?php
include 'db.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
$stmt->execute([$id]);
echo "Usuário deletado!";
echo "<br><a href='read.php'>Voltar</a>";