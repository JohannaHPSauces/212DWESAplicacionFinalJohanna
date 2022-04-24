
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="webroot/estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <!--class="titulo"-->
            <div id="cajaTitulo">Aplicacion Final</div>
            
            <?php require_once $vistas[$_SESSION['paginaEnCurso']]; ?>
        </header>
        <footer>
            2021-22 I.E.S. Los sauces. ©Todos los derechos reservados. <strong> <a href="http://daw212.sauces.local/">Johanna Herrero Pozuelo</a></strong>
            <a target="_blank" href="https://github.com/JohannaHPSauces/212LoginLogoutTema5"><img src="../images/git.png" alt="" class="git"></a>
        </footer>
</body>
</html>


