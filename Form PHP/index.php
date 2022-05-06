<?php 
 session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-Pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registar Utilizador</h1>
    
    <?php
    if(isset($_SESSION['msg'] ) ) {
        echo $_SESSION['msg'] ;
        unset($_SESSION['msg'] ) ; 
    }
    
    ?>

    <form method="POST" action="processa.php">
        <label>Nome: </label>
        <input class="nm" type="text" name="nome" placeholder="Introduza o nome completo">
        <br>
        <br>
        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Introduza o seu email">
        <br>
        <br>
        <input class="btn" type="submit" value="Registar">
    </form>
</body>
</html>