<?php
require 'db_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM aluno WHERE id = :id";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute(['id' => $id]);
    echo "Aluno excluído com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao excluir aluno: " . $e->getMessage();
}
?>
