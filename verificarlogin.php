<?php 




$login = $_POST['login'];
$senha = md5($_POST['senha']);
    
include_once 'conexao.php';    

$sql = "select * from usuarios where login = '{$login}' or email='{$login}' and senha = '{$senha}'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) == 1) {
    
    echo "logado";
    
}



?>