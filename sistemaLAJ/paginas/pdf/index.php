<?php
include('../../config.php');
?>

<html>
    <head>
        <style>
            *{
                margin:0;
                padding:0px;
                font-family:Arial;
            }
            body{
                background-color:#1e6fb5a3;
            }
            .imprimirbox{
                width: 30%;
                display:inline-block;
                height: 200px;
                padding: 37px 10px;
                text-align: center;
                background-color: #088f4a;
                position: absolute;
                top: 25%;
                left: 34%;

                box-shadow: 17px 9px 44px 0px rgba(0,0,0,0.44);
                -webkit-box-shadow: 17px 9px 44px 0px rgba(0,0,0,0.44);
                -moz-box-shadow: 17px 9px 44px 0px rgba(0,0,0,0.44);
            }
            .imprimirbox > div{
                width: 100%;
                height: 43px;
                display:inline-block;
            }

            a{
                padding:9px; text-decoration: none;background-color: #ccc; color:black;
                border-radius:20px;
                width: 100px;
                display:inline-block;
            }

            h2{
                margin-bottom: 55px; color:white;
            }
        </style>
    </head>
    <body>    
        <div style="text-aling: center;" class="imprimirbox">
            <h2>Você gostaria de gerar um PDF?</h2>
            <!-- <div>
                <a href="pdf.php">PDF registro</a>
            </div> -->
            <div>
                <a href="pdf.php">Gerar PDF</a>
            </div>
            <div>
                <a href="../../main">Voltar</a>
            </div>
        </div>    
    </body>
</html>