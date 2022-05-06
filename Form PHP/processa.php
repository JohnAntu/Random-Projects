<?php 

session_start(); 

include_once("conexao.php");

$nome  = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$email  = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


//echo "Nome: $nome <br>";

//echo "E-mail: $email <br>";


$result_utilizadores = "INSERT INTO utilizadores (nome, email, created) VALUES ('$nome', '$email', NOW())";

$result_utilizadores = mysqli_query($conn, $result_utilizadores);

if (mysqli_insert_id($conn) ) {
    $_SESSION['msg'] = "<p style='color:green; text-align:center; margin-top:45px; font-family: arial; font-weight:bold; font-size: 1.2rem;'> Utilizador Registado com sucesso</p>";
    header("Location: index.php");
    
} else {
    $_SESSION['msg'] = "<p style='color:red; text-align:center; margin-top:45px; font-family: arial; font-weight:bold; font-size: 1.2rem;'> Utilizador Registado com sucesso</p>"; 
    header("Location: index.php");
}
