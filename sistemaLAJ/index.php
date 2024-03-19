<?php
	include('config.php');

    $url = isset($_GET['url']) ? $_GET['url'] : 'login';
    if(file_exists('paginas/'.$url.'.php')){
        include('paginas/'.$url.'.php');
    }elseif ($url == "painel") {
		include('paginas/painel/index.php');
	}else{
		echo'<html>Essa pagina não existe volte <a href="'.INCLUDE_PATH.'login">Volte</a></html>'
	;} 
 ?>