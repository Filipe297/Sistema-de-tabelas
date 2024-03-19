<html>
<head>
    <link href="css/style.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        input[name='senhadm']{
            width: 90px!important;
            height: 24px;
            padding-left: 5px!important ;
            font-size: 13px;
            border: 0px solid black !important;
            border-radius: 4px !important;
            background-color: #ffffff00;
        }
    </style>
</head>

<body>
        
    <div class="painel-login-mains">
        <div class="center">
            <!-- <div id="asb"></div> -->
            <a class="paineluser" href="<?php echo INCLUDE_PATH?>main">Voltar</a>
            <h2 class="user">
                <?php echo "Bem vindo, ".$_SESSION['user'];?>.
            </h2>
        </div> <!-- center -->
    </div> 

    <main class="paineluser">
            <?php 
                $sql2 = MySql::conectar()->prepare("SELECT * FROM `tbadmin`");
                $sql2->execute();
                $tabela = $sql2->fetchAll();
                echo "<br/><br/><br/><br/> <div class='paineluser'><h3>Usuários do sistema</h3> <painel class='userpainel'> ";

                    foreach ($tabela as $key => $value){
                        echo "<br/>";
                        if ($value['login'] == 'Admin' || $value['login'] == 'admin') {
                            echo "
                            <div class='userpainel'>
                                Login: <br/>".$value['login']." <br/><br/>
                                <form method='POST'>
                                    Senha: <input type='text' value='".$value['Senha']."' name='senhadm'/>
                                    <input class='userpainel' type='submit' value='Editar senha' name='editar'/>
                                    <input type='hidden' value='".$value['login']."' name='login'/>
                                </form>
                            </div>";
                        }else{
                            echo "
                            <div class='userpainel'>
                                Login: <br/>".$value['login']." <br/><br/>
                                Senha: <br/>".$value['Senha']."<br/>
                            <form method='POST' class='userpainel'>
                                <input class='userpainel' type='submit' value='Remover' name='remover'/>
                                <input type='hidden' value='".$value['login']."' name='login'/>
                            </form>
                            </div>";
                        }
                    }
                echo "<div style='clear: both;'></div> </painel> </div>";


                if(isset($_POST['submit1'])){
                    $usuario = $_POST['usuario']; 
                    $senha = $_POST['senha'];
                    $sql5 = MySql::conectar()->prepare("INSERT INTO `tbadmin` (`login`, `Senha`) VALUES (?, ?)");
                    $sql5->execute(array($usuario, $senha));
                    alert("Usuário adicionado com sucesso!");
                    redirect("painel");
                }

                if(isset($_POST['editar'])){
                    $senha = $_POST['senhadm'];
                    $login = $_POST['login'];
                    $sql3 = MySql::conectar()->prepare("UPDATE `tbadmin` SET `Senha` = ? WHERE `tbadmin`.`login` = ?;");
                    $sql3->execute(array($senha, $login));
                    alert("Senha editada com sucesso!");
                    redirect("painel");
                }

                if(isset($_POST['remover'])){
                    $login = $_POST['login'];
                    $sql = MySql::conectar()->prepare("DELETE FROM `tbadmin` WHERE `login` = ?");
                    $sql->execute(array($login));
                    alert("Usuário removido com sucesso!");
                    redirect("painel");
                }
            ?>

            <div style="margin-top:40px" >
                
                <form action="painel" method="POST" class="adusuario" >
                    <p style="padding-top:40px">Adicionar usuário</p>
                    <div style='margin-top: 30px;'></div>
                    <input type="text" class="adusuario" name="usuario" placeholder="usuário" required>
                    <input type="text" class="adusuario" name="senha" placeholder="senha" required>
                    <div><input type="submit" class="adusuario" value="Adicionar" name="submit1"></div>
                </form>
            </div>
    </main>
</body>

</html>