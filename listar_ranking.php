<?php

require_once 'conexao.php';

// para lista o top 10 adicine 1 no top da requisição,
// exemplo listar_ranking.php?top=1 ou 0 para listar todos
$top = $_GET['top'];

if ($top) {
    // Selecionar todos os 10 melheres jogadores do banco
    $stmt = $pdo->query("SELECT * FROM jogadores ORDER BY pontos DESC LIMIT 10");
    $jogadores = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Retornar os jogadores em formato JSON
    header('Content-Type: application/json');
    echo json_encode($jogadores);
} else {
    // Selecionar todos os jogadores do banco
    $stmt = $pdo->query("SELECT * FROM jogadores ORDER BY pontos DESC");
    $jogadores = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Retornar os jogadores em formato JSON
    header('Content-Type: application/json');
    echo json_encode($jogadores);
}
