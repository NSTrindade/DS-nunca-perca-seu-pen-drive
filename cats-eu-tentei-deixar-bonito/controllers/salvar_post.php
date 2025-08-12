<?php
session_start();
require '../model/db.php'; // conexão ao banco
// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../views/login.php");
    exit;
}
$usuario_id = $_SESSION['usuario_id'];
$legenda = $_POST['legenda'];
$data_post = date('Y-m-d H:i:s'); // data e hora atuais
// Diretório para salvar imagens
$diretorio = "uploads/";
if (!is_dir($diretorio)) {
    mkdir($diretorio, 0777, true);
}
// Verifica se o upload foi feito
if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
    $nome_arquivo = uniqid() . "_" . basename($_FILES['imagem']['name']);
    $caminho_arquivo = $diretorio . $nome_arquivo;
    // Move o arquivo para o diretório de uploads
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_arquivo)) {
        // Salva no banco
        $sql = "INSERT INTO posts (usuario_id, imagem, legenda, data_post) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isss", $usuario_id, $caminho_arquivo, $legenda, $data_post);
        if ($stmt->execute()) {
            echo "Post publicado com sucesso! <a href='feed.php'>Voltar ao feed</a>";
        } else {
            echo "Erro ao publicar post: " . $stmt->error;
        }
    } else {
        echo "Erro ao salvar imagem!";
    }
} else {
    echo "Nenhuma imagem enviada!";
}
$conn->close();
?>