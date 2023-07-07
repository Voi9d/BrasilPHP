<?php

session_start();
//Se não existir a Session Login
if(!isset($_SESSION['login'])){
    header('location:index.php?cod=172');
}

?>
