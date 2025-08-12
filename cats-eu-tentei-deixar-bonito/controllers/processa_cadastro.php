<?php
include '../model/db.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmar = $_POST['confirmar_senha'];
if ($senha !== $confirmar) {

    die("As senhas não conferem.");
    // die = exit
// Ela encerra a execução do código.
}

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuario (email, senha) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $senha_hash);
if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso. <a href='login.php'>Fazer login</a>";
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}
$conn->close();
?>