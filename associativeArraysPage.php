<?php
require_once './shared/header.php'
?>
<?php
$age = array('Peter'=>'35', 'Ben'=>'37', 'Joe'=>'43');
//echo "Peter tem " . $age['Peter'] . " anos de idade.";
//Ou dessa forma
$age['Maria'] = '20';

//Para percorrer um array associativo
foreach ($age as $key => $value){
    echo('<p> A idade de '.$key.' é: '.$value.'</p>');
}

$dados = array('email' => 'admin@admin', 'senha' => 'administrador');
?>
<?php
require_once './shared/footer.php'
?>
