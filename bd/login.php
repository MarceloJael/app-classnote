<?php
session_start();

include 'conexao.php';

$erro_login = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM users WHERE email = ? AND senha = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $row = $resultado->fetch_assoc();
        
        $_SESSION['id_usuario'] = $row['id'];
        $_SESSION['nome_usuario'] = $row['nome'];
        $_SESSION['sobrenome_usuario'] = $row['sobrenome'];
        $_SESSION['email_usuario'] = $row['email'];
        $_SESSION['instituicao_usuario'] = $row['instituicao'];
        $_SESSION['privacidade_usuario'] = $row['privacidade'];
        $_SESSION['comunicacao_usuario'] = $row['comunicacao'];
        
        header("Location: ../home.php");
        exit();
    } else {
        
        $_SESSION['erro_login'] = "Usuário e/ou senha inválidos.";
        header("Location: ../index.php");
        exit();
    }
}

$conexao->close();
?>
