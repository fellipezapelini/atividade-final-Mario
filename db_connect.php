<?php
$database_path = 'atividade_db.sqlite';

try {
    $pdo = new PDO('sqlite:' . $database_path);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro na conexão: ' . $e->getMessage();
}
?>
