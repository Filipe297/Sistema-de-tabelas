const URL = "/sistemaLAJ/";
var btn = document.querySelector(".div-botao-formregistro")
        btn.addEventListener("click",function(){
            var form = document.querySelector("#opa");
            //
            if(form.classList.contains("displaynone")){
                form.classList.remove('displaynone');
            }else{
                form.classList.add('displaynone');
            }
        })


        var btncl = document.querySelector(".clform")
        btncl.addEventListener("click",function(){
            var form = document.querySelector("#opa");
            //
            if(form.classList.contains("displaynone")){
                form.classList.remove('displaynone');
            }else{
                form.classList.add('displaynone');
            }
        })

        //sistema de preferencias do
        //site - ainda n ta pronto preciso pensar mais
        // usar cokies para salvar preferencias do usuário??

        function preferencias(){
            var tha = document.querySelectorAll(".th");
            if (a == "a") {
                tha.forEach(element => {
                    element.style.color = "red";
                }); 
            }
        }

        var btnasb = document.querySelector("#asb");
        btnasb.addEventListener("click",function(){
            let sidebar = document.querySelector(".sidebar");

            if(sidebar.classList.contains("escondeu")){
                sidebar.classList.remove('escondeu');
                btnasb.style.backgroundImage = "url('"+URL+"imagens/menuf.png')";
                //mudar depois quando mudar o arquivo de local
            }else{
                btnasb.style.backgroundImage = "url('"+URL+"imagens/menu.png')";
                sidebar.classList.add('escondeu');
            }
        });


        // Jqquery

    //    $(function(){
            var $fechar = $('.clexpirou');
            var $boxalert = $('.dataexpirou');

            $boxalert.css('marginTop', '87px');

            $fechar.click(function(){
                $boxalert.css('display', 'none')
                $boxalert.css('marginTop', '790px');
            })

            //var $input = $('.sla');
            

            // $input.forEach($input => {
            //     $input.blur(function(){
            //     $(".formsele").submit();
            //         alert("valor "+$input.val())
            //     })
            // });

        //    $.each($input, function(){
        //         $input.blur(function(){
        //                //$(".formsele").post();
                        
        //                $.post( "main", { name: "editar", id: "3" })
        //                         .done(function( ) {
        //                         alert( "Data Loaded: ");
        //                     });
        //              })
        //       });
            
        // })