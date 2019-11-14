<?php 



    include_once"validar.php";
    session_destroy();


    $msg = "Logout Efetuado!";

    header("location:index.php?msg=".$msg);














?>