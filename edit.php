<?php
require 'db_connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM aluno WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$aluno = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $aluno['id'] ?>">

    <label for="uuid">UUID:</label>
    <input type="text" id="uuid" name="uuid" value="<?= $aluno['uuid'] ?>" required><br>

    <label for="matricula">Matrícula:</label>
    <input type="text" id="matricula" name="matricula" value="<?= $aluno['matricula'] ?>" required><br>

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="<?= $aluno['nome'] ?>" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?= $aluno['email'] ?>" required><br>

    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" id="data_nascimento" name="data_nascimento" value="<?= $aluno['data_nascimento'] ?>" required><br>

    <input type="submit" value="Atualizar Aluno">
</form>
