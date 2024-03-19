<?php
@$ncadeira = $dados[0]['Cadeiras'];
@$nmesas = $dados[0]['Mesas'];
@$solicitante = $dados[0]['Solicitante'];
@$endereco = $dados[0]['Endereco'];

$arquivo = '

<html>
    <head>
        <style>
            body{
                background-color: white;
                height: 500px;
            }
            h2{
                text-align: center;
                font-family:Arial;
            }

            p{font-family:Tahoma;}
            div{
                background-color: #14eeb4;
                height: 550px;
            }

            .conteudo{
                width: 80%;
                height: 400px;
                margin: 0 auto;
                padding-left: 20px;
                display: inline-block;
                position: absolute;
                left: 10%;
                top: 10%;

                font-family:Arial;
                background-color: #0ec48b;
                border-radius: 20px;

                box-shadow: 17px 9px 44px 0px rgba(0,0,0,0.44);
                -webkit-box-shadow: 17px 9px 44px 0px rgba(0,0,0,0.44);
                -moz-box-shadow: 17px 9px 44px 0px rgba(0,0,0,0.44);
            }

            img{
                width:100px;
                position:absolute;
                bottom:0px;
                right:45%;
            }
        </style>
    </head>

    <body>
        <div>

        
        <div class="conteudo">
            <h2> Muito obrigado pela sua solicitação</h2>
            </br>
            <p>Você solicitou '.$ncadeira.' cadeiras e '.$nmesas.' mesas</p>
            <p></p>
            <p>Endreço de solicitação: <b>'.$endereco.'</b>.</p>
            </br>
            </br>
            <p>Muito obrigado, <b>'.$solicitante.'</b>. esperamos que tenha um ótimo dia.</p>
            <img src="http://localhost/'.INCLUDE_PATH.'paginas/pdf/imagem/teste2.jpg">
        </div>
        </div>
    </body>
</html>

';

?>