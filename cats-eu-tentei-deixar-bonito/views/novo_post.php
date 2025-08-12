<?php
session_start();
// Verifica se está logado
if (!isset($_SESSION['usuario_id'])) {
header("Location: ../views/login.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Novo Post</title>
</head>
<body>
<form action="../controllers/salvar_post.php" method="POST" enctype="multipart/form-data">
<h2>Criar novo post</h2>
<label>Imagem:</label>
<input type="file" name="imagem" accept="image/*" required><br><br>
<label>Legenda:</label>
<textarea name="legenda" rows="4" cols="40" required></textarea><br><br>
<button type="submit">Postar</button>
</form>
</body>
</html>