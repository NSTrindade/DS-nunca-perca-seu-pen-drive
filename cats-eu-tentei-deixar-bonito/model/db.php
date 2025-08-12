<?php

$host = 'localhost';
$user = 'root';
$pass = ''; // Padrão do XAMPP
$dbname = 'catsdb';

$conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
     die("Erro de conexão: " . $conn->connect_error);
        } else {
            echo "Deu bom!";
        }
?>