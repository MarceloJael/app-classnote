<?php
session_start();
include 'conexao.php';

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Capturar os dados do formulário
    $id_usuario = $_SESSION['id_usuario'];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $instituicao = $_POST["instituicao"];
    $privacidade = isset($_POST["privacidade"]) ? 1 : 0;
    $comunicacao = isset($_POST["comunicacao"]) ? 1 : 0;
    
    // Preparar e executar a query de update
    $sql = "UPDATE users SET nome=?, sobrenome=?, email=?, senha=?, instituicao=?, privacidade=?, comunicacao=? WHERE id=?";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssssssi", $nome, $sobrenome, $email, $senha, $instituicao, $privacidade, $comunicacao, $id_usuario);
    
    if ($stmt->execute()) {

        session_unset();
        session_destroy();
        header("Location: ../index.php");
        exit();
    } else {
        // Em caso de erro, definir a mensagem de erro
        $erro = "Erro ao atualizar o cadastro: " . $conexao->error;
    }
}

$conexao->close();

?>
