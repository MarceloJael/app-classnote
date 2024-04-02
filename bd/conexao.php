<?php

// Configurações de conexão com o banco de dados
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'classnote';

// Criação de uma nova conexão com o banco de dados usando a classe mysqli
$conexao = new mysqli($hostname, $username, $password, $database);

// Verifica se houve erro na conexão e, em caso positivo, encerra o script exibindo uma mensagem de erro
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Define o conjunto de caracteres da conexão como UTF-8 para suportar caracteres especiais
$conexao->set_charset("utf8");

?>
