<?php

require_once 'conexao.php';

// Selecionar todos os 10 melheres jogadores do banco
$stmt = $pdo->query("SELECT * FROM jogadores ORDER BY pontos DESC LIMIT 10");
$jogadores = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Retornar os jogadores em formato JSON
header('Content-Type: application/json');
echo json_encode($jogadores);
