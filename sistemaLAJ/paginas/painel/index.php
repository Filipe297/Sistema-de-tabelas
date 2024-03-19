<?php

    if ($_SESSION['user'] != 'admin' || isset($_SESSION['user']) == false) { 
        echo "Você não tem permissão para xeretar aqui. Vá embora!!!";
    }else{ 
        include("painel.php");  
    } 

?>