<?php
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uuid = $_POST['uuid'];
    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];

    $sql = "INSERT INTO aluno (uuid, matricula, nome, email, data_nascimento) VALUES (:uuid, :matricula, :nome, :email, :data_nascimento)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute(['uuid' => $uuid, 'matricula' => $matricula, 'nome' => $nome, 'email' => $email, 'data_nascimento' => $data_nascimento]);
        echo "Aluno inserido com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao inserir aluno: " . $e->getMessage();
    }
}
?>
