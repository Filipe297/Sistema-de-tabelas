<?php 
    if ($_SESSION['login'] != true) {
        header('Location: login');
    }
    
    if (isset($_POST["deslogar"])) {
        setcookie('login','true',time()-1,'/');
        session_destroy();
        header('Location: login');
    }
    
    $url = isset($_GET['url']) ? $_GET['url'] : 'main';
?>

<html>
    <head>
        <link href="css/style.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="imagens/jpg" href="imagens/icone.jpg"/>
    </head>

    <header>
    
        <div class="painel-login-mains">
            <div class="center">
                
                <div id="asb" style='background-color:white;'></div>
                <h2 class="user">
                    <?php echo "Bem vindo, ".$_SESSION['user'];?>.
                </h2>
            </div> <!-- center -->
        </div>    
        <div class="div-botao-formregistro">Registrar</div>
         

        <!-- <h2 id='horario'>
            <?php 
                // $data = date('l jS \of F Y h:i:s A');
                // echo $data; 

                // $dataatual = date('j/n/y');
                // echo $dataatual;
            ?>
        </h2>   -->
    </header>

    <body> 
        <?php
            if(isset($_POST['submit1'])){
                $solicitante = $_POST['solicitante1']; 
                $cadeira = $_POST['cadeiras1'];
                $mesa = $_POST['mesas1'];
                $dataentrega = $_POST['dataentrega'];
                $dataevento = $_POST['dataevento1'];
                $endereco = $_POST['endereco1'];
                $entregue = 'Aguardando';
                $sql5 = MySql::conectar()->prepare("INSERT INTO `dados` (`Solicitante`, `Mesas`, `Cadeiras`, `Datas`, `Data/Evento`, `Endereco`, `Entregue`) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $sql5->execute(array($solicitante, $mesa, $cadeira, $dataentrega, $dataevento, $endereco, $entregue));
            }
            
            if(isset($_POST['imprimir'])){
                $id = $_POST['emprimir'];
                $_SESSION['imprimirid'] = $id;   
                redirect("paginas/pdf/index.php");
            }
        
        ?>
    
    
        <form action="" method="POST" class="registro displaynone" id="opa">
            <div style='margin-top: 30px;'></div>
            <div><button class="clform">X</button></div>
            <input type="number" name="cadeiras1" placeholder="Números de Cadeira" required>
            <input type="number" name="mesas1" placeholder="Números de Mesas" required>
            <input type="text" name="solicitante1" placeholder="Nome do solicitante" required>
            <input type="text" name="dataentrega" placeholder="Data de entrega prevista" required>
            <input type="text" name="dataevento1" placeholder="Data do envento" required>
            <input type="text" name="endereco1" placeholder="Endereço" required>
            <div><input type="submit" value="Adicionar" name="submit1"></div>
        </form>

        <!-- <div class="dataexpirou">
             <div style="margin-top: 30px;"></div>
             <div><button class="clexpirou">X</button></div>
             <h2>Data expirou</h2>
             <div class="clexpirou"><input  type="button" value="Ok" name="submit1"></div>
         </div> -->

       
            
        <?php  
            if ($_SESSION['user'] == 'admin') { 
                include("tabelaadm.php");
            }else{ 
                include("tabelauser.php");
            }      
        ?>


        <section class="sidebar escondeu">
            <div class="wrapitens">
                <!-- <div> -->
                    <!-- <div class="btn-preferencias" onclick="preferencias()">Preferencias</div> -->
                     <?php //if ($_SESSION['user'] == 'admin') {echo '';}?>
                      <div class="btn-preferencias" onclick="window.location='painel'">Painel Administrativo</div>
  

                    <form class="form-do-main" method="POST"><input type="submit" value='Deslogar!' name='deslogar'/></form>
                <!-- </div> -->
            </div>
        </section>
    </body>

    <footer></footer>
    
    <script src="<?php echo INCLUDE_PATH?>/paginas/js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH?>/paginas/js/functions.js"></script>
    <script></script>
</html>