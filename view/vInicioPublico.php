<header>
    <div id="cajaTitulo" class="text-center p-2 h4 font-weight-bold" style="background-color:gainsboro;">INICIO PÚBLICO </div>
</header>
    <form class="cajaIdioma">
        <button class="cajaIdioma" type="submit" name="idiomaSeleccionado" value="es" ><img src="webroot/images/es.png" alt="cargando.." height="20px"></button>
        <button class="cajaIdioma" type="submit" name="idiomaSeleccionado" value="en" ><img src="webroot/images/in.png" alt="cargando.." height="20px"></button>
        <button class="cajaIdioma" type="submit" name="idiomaSeleccionado" value="pt"><img src="webroot/images/po.png" alt="cargando.." height="20px"></button>
    </form>
    <br>
    <form class="container-fluid h-25"> 
    	<div class="row w-100 align-items-center">
            <div class="col text-center" >
                <div style="background: ghostwhite; width: 40%; margin:auto;padding: 2px;"><h2> <?php echo $aIdioma[$_COOKIE['idioma']]['elegido'] ?> <?php echo $aIdioma[$_COOKIE['idioma']]['seleccionado'] ?> </h2></div> <br>
                <input type="submit" class="btn btn-primary btn-lg btn-block" name="iniciar" value="INICIAR SESION"><br><br>
            </div>	
    	</div>
    </form>
    <div class="container">
        <div class="card-group">
            <div class="card text-center " style="border:2px solid grey;">
                <img class="card-img-top" src="webroot/images/cat.PNG" alt="Card image cap">
                <div class="card-body"><br><br>
                  <h5 class="card-title">Catálogo de Requisitos</h5>
                  <a href="webroot/doc/220119CatalogoDeRequisitos.pdf" target="_blank" class="btn btn-primary">Ver</a>
                </div>
            </div>
            <div class="card text-center" style="border:2px solid grey;">
                <img class="card-img-top" src="webroot/images/ses.PNG" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Uso de $_SESSION</h5>
                  <a href="webroot/doc/220111UsoDeLaSessionParaLaAplicación.pdf" target="_blank" class="btn btn-primary">Ver</a>
                </div>
            </div>
            <div class="card text-center" style="border:2px solid grey;">
                <img class="card-img-top" src="webroot/images/mod.PNG" target="_blank" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Modelo Físico de Datos</h5>
                  <a href="webroot/doc/201127ModeloFisicoDeDatos20-21.pdf" target="_blank"  class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="container">
        <div class="card-group">
            <div class="card text-center" style="border:2px solid grey;">
                <img class="card-img-top" src="webroot/images/dia.PNG" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Diagrama Casos de Uso</h5>
                  <a href="webroot/doc/220119DiagramaDeCasosDeUso.pdf" target="_blank" class="btn btn-primary">Ver</a>
                </div>
            </div>
            <div class="card text-center" style="border:2px solid grey;">
                <img class="card-img-top" src="webroot/images/diacla.PNG" target="_blank" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Diagrama de Clases</h5>
                  <a href="webroot/images/Main.png" target="_blank" class="btn btn-primary">Ver</a>
                </div>
            </div>
            <div class="card text-center" style="border:2px solid grey;">
                <img class="card-img-top" src="webroot/images/arb.PNG" target="_blank" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Árbol de Navegación</h5>
                  <a href="webroot/doc/220119ArbolDeNavegación.pdf" target="_blank" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="container ">
        <div class="card-group">
            <div class="card text-center" style="border:2px solid grey;">
                <img class="card-img-top" src="webroot/images/fic.PNG" alt="Card image cap">
                <div class="card-body"><br>
                  <h5 class="card-title">Relación de Ficheros</h5>
                  <a href="webroot/doc/220119RelacionDeFicheros.pdf" target="_blank" class="btn btn-primary">Ver</a>
                </div>
            </div>
            <div class="card text-center" style="border:2px solid grey;">
                <img class="card-img-top" src="webroot/images/est.PNG" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Estructura de Almacenamiento</h5>
                  <a href="webroot/doc/211129EstandarDesarrolloDAWyEstructuraAlmacenamientoDWES.pdf" target="_blank" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>