
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--<link href="webroot/estilo.css" rel="stylesheet" type="text/css">--!
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <!--class="titulo"-->
            <div id="cajaTitulo" class="text-center p-4 display-6 font-weight-bold text-white bg-secondary" style="font-weight: bold;">APLICACION FINAL</div>
            
            <?php require_once $vistas[$_SESSION['paginaEnCurso']]; ?>
        </header>
        <footer class="text-center p-2 fixed-bottom" style="background-color:grey;">
            2021-22 I.E.S. Los sauces. ©Todos los derechos reservados. <strong> <a class="text-reset fw-bold" href="http://daw212.sauces.local/">Johanna Herrero Pozuelo</a></strong>
            <br><a target="_blank" href="https://github.com/JohannaHPSauces/212LoginLogoutTema5"><img src="../images/git.png" width="30px" alt="" class="git"></a>
        </footer>
</body>
</html>


