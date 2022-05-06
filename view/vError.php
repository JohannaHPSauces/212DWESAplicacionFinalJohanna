<div id="cajaTitulo" class="text-center p-2 h4 font-weight-bold" style="background-color:gainsboro;"></div>
<div id="cajaTitulo" class="text-center p-4 h4 font-weight-bold bg-transparent"></div>
<div class="jumbotron">
    <div class="container w-100 h-75 bg-light text-danger"><br><br>
        <h1 class="text-center display-4"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Se ha producido ERROR</h1>
        <h3>Error</h3>
        <p> <?php echo $error ?></p><br>
        <h3>Codigo</h3>
        <p> <?php echo $descripcion ?></p><br>
        <h3>Archivo</h3>
        <p> <?php echo $archivo ?></p><br>
        <h3>Linea</h3>
        <p> <?php echo $linea ?></p>
        <br><br>
        <form class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-1 w-100 float-end"  aria-label="First group">
                <input type="submit" class="btn btn-info " value="Volver" name="volver"/>
            </div>
        </form>
    </div>
</div>

