<?php
$host = 'localhost';
$db = '2ds'; // Substitua com o nome do seu banco
$user = 'root';
$pass = ''; // senha do seu banco, se houver
try {
$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
die("Erro na conexão: " . $e->getMessage());
}
?>