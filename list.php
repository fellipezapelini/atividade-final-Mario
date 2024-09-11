<?php
require 'db_connect.php';

$sql = "SELECT * FROM aluno";
$stmt = $pdo->query($sql);
$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Lista de Alunos</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>UUID</th>
        <th>Matrícula</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Data de Nascimento</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($alunos as $aluno): ?>
        <tr>
            <td><?= $aluno['id'] ?></td>
            <td><?= $aluno['uuid'] ?></td>
            <td><?= $aluno['matricula'] ?></td>
            <td><?= $aluno['nome'] ?></td>
            <td><?= $aluno['email'] ?></td>
            <td><?= $aluno['data_nascimento'] ?></td>
            <td>
                <a href="edit.php?id=<?= $aluno['id'] ?>">Editar</a>
                <a href="delete.php?id=<?= $aluno['id'] ?>">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
