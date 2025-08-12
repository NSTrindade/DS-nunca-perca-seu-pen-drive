<?php
session_start();
include '../model/db.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($usuario = $result->fetch_assoc()) {
    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario_id'] = $usuario['id'];

        //redireciona para o feed
        header("Location: ../views/novo_post.php");
        } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}
$conn->close();
?>