<?php 
    $servidor = "localhost"; //padrão    
    $usuario = "root"; //padrâo do xampp
    $senha = ""; //padrão do xampp
    $banco = "colegio"; //nome do banco

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    if($conn->connect_error) {
        die("Falha na conexão");
    }

    echo "conexão bem sucedida!";
    
?>