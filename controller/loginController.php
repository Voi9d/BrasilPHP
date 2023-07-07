<?php

//Se vier qualquer coisa via get
if ($_POST) {
    //print_r($_GET);
    //entra aqui e pega os valores.
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    //abrir a conexao
    //executar a consulta
    
    if ($email == 'a@a' && $senha == '123') {
        //Login OK
        //header('location:../index.php?email='.$email.'&&senha='.$senha);
        //echo ('Usuário logado com sucesso.');
        
        //Abrir a sessão
        session_start();
        //Criei a sesão "login "
        $_SESSION['login'] = $email;
        header('location:../home.php');
    } else {
        //Login inválido 
        header('location:../index.php?cod=171');
    }
} else {
    //redireciona para a index
    header('location:../index.php');
}
?>
