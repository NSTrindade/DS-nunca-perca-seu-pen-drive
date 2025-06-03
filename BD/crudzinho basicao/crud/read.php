<?php
include 'db.php';
$stmt = $pdo->query("SELECT * FROM usuarios");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<h2>Lista de Usuários</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario['id'] ?></td>
            <td><?= $usuario['nome'] ?></td>
            <td><?= $usuario['email'] ?></td>
            <td>
                <a href="update.php?id=<?= $usuario['id'] ?>">Editar</a> |
                <a href="delete.php?id=<?= $usuario['id'] ?>" onclick="return confirm('Deseja deletar?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>