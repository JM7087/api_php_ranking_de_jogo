<?php

// Configurações do banco de dados
$host = 'localhost';
$dbname = 'nome_do_banco';
$username = 'nome_do_usuario';
$password = 'sua_senha';

// Tentar estabelecer a conexão com o banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}
