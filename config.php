<?php
$hostname = 'nome_do_container_mysql'; 
$username = 'ADM';
$password = '123';
$database = 'Atv_Software';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    // Outras configurações e manipulações de banco de dados podem ser adicionadas aqui
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>
