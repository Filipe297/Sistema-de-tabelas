<?php
    session_start();
	date_default_timezone_set('America/Recife');
    define('INCLUDE_PATH','/sistemaLAJ/');

    $css = '<link href="<?php echo INCLUDE_PATH; ?>CSS/style.css" rel="stylesheet" />';

     //Conectar com banco de dados!
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','sistemalaj');

    include('classes/mysql.php');

    function alert($msg){
        echo "<script>alert('".$msg."')</script>";
    }

    function redirect($var){
        echo "<script>window.location='".$var."'</script>";
    }

    function box(){
       echo '
        <div class="dataexpirou">
             <div style="margin-top: 30px;"></div>
             <p>Você tem uma data ou mais expiradas!</p>
             <div class="clexpirou">Ok</div>
         </div>
        ';
    }
    
    function dataexpirou($dataentrega = "Adicione uma data de entrega", $entregue = "", $solicitante){
        
        $dataatual = date('j/n/y');
        $data1 = explode('/', $dataatual);
        $data2 = explode('/', $dataentrega);

        if ($data1[2] > $data2[2] && $entregue == "Aguardando") {
            echo '<input class="sla" style="color:red" type="text" name="datas" value="'.$dataentrega.'"/>';
            box();
            //alert('Você tem uma data de entrega expirada. Solicitante: '.$solicitante.'.');
        }else{
            if($data1[2] == $data2[2] && $entregue == "Aguardando"){ 
                if ($data1[1] > $data2[1]) {
                    echo '<input class="sla" style="color:red" type="text" name="datas" value="'.$dataentrega.'"/>';
                    box();
                }elseif($data1[1] == $data2[1]) {
                    if ($data1[0] > $data2[0]){
                        echo '<input class="sla" style="color:red" type="text" name="datas" value="'.$dataentrega.'"/>';
                        box();
                    }else {
                        echo '<input class="sla" style="color:black" type="text" name="datas" value="'.$dataentrega.'"/>';
                    }
                }else {
                    echo '<input class="sla" style="color:black" type="text" name="datas" value="'.$dataentrega.'"/>';
                }
             }else {
                echo '<input class="sla" style="color:black" type="text" name="datas" value="'.$dataentrega.'"/>';
           
            }
        }
    } // endfunction
?>