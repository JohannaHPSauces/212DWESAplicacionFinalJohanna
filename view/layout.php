
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--<link href="webroot/estilo.css" rel="stylesheet" type="text/css">--!
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v1.0.0/dist/bootstrap-float-label.min.css"/>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/v4-shims.js"></script> 
        <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/fontawesome.js"> </script>
        <link href="css/bootstrap.min.css" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <header>
            <!--class="titulo"-->
            <div id="cajaTitulo" class="text-center p-4 display-6 font-weight-bold text-white bg-secondary" style="font-weight: bold;">APLICACIÓN FINAL JOHANNA</div>
            
        </header>
        <script>
            function mostrarPassword(){
                var tipo = document.getElementById("password");
                if(tipo.type == "password"){
                    tipo.type = "text";
                }else{
                    tipo.type = "password";
                }
            }
            function mostrarPassword1(){
                var tipo = document.getElementById("password1");
                if(tipo.type == "password"){
                    tipo.type = "text";
                }else{
                    tipo.type = "password";
                }
            }
            function mostrarPassword2(){
                var tipo = document.getElementById("password2");
                if(tipo.type == "password"){
                    tipo.type = "text";
                }else{
                    tipo.type = "password";
                }
            }
        </script>
        <?php require_once $vistas[$_SESSION['paginaEnCurso']]; ?>
        <form>
        <footer class="text-center p-2 fixed-bottom" style="background-color:grey;">
            <form>
            2021-22 I.E.S. Los sauces. ©Todos los derechos reservados. <strong> <a class="text-reset fw-bold" href="http://daw212.sauces.local/">Johanna Herrero Pozuelo</a></strong>
            <br>
            <a target="_blank" ><img src="webroot/images/curri.png" width="30px" alt="" class="git"></a>
            <input type="submit" name="tecnologias"><img src="webroot/images/tecno.png" width="30px" alt="" class="git"></a>
            <a target="_blank" ><img src="webroot/images/rss.png" width="30px" alt="" class="git"></a>
            <a target="_blank" href="https://github.com/JohannaHPSauces/212DWESAplicacionFinalJohanna"><img src="../images/git.png" width="30px" alt="" class="git"></a>
            </form>
        </footer>
        
</body>
</html>