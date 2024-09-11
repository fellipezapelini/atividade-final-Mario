<?php
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $uuid = $_POST['uuid'];
    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];

    $sql = "UPDATE aluno SET uuid = :uuid, matricula = :matricula, nome = :nome, email = :email, data_nascimento = :data_nascimento WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute(['uuid' => $uuid, 'matricula' => $matricula, 'nome' => $nome, 'email' => $email, 'data_nascimento' => $data_nascimento, 'id' => $id]);
        echo "Aluno atualizado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao atualizar aluno: " . $e->getMessage();
    }
}
?>
