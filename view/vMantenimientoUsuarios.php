<div id="cajaTitulo" class="text-center p-2 h4 font-weight-bold" style="background-color:gainsboro;">MANTENIMIENTO USUARIOS </div>
<div id="cajaTitulo" class="text-center p-4 h4 font-weight-bold bg-transparent"> </div>
<form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="submit" class="btn btn-secondary btn-info" value="Volver" name="volver"/><br><br>
    <div class="container text-center">
        <label for="txtFloatingUsername">Buscar usuario por descripción</label><br>
    </div>
    <div class="container bg-light d-flex justify-content-center">
            <div class="input-group w-50">
                <input type="text" class="form-control" id="descripcionABuscar" name="descUsuario"> 
                <span class="input-group-btn">
                   <input type="submit" class="btn btn-secondary btn-labeled" id="buscarDesc" value="Buscar" name="buscar"/>
                </span>
            </div>
    </div>
</form>
<div class="container">
<table class="table table-bordered w-100 align-items-center font-weight-bold">
    <thead>
        <tr>
            <th class="bg-light text-center  " scope="col">Código </th>
            <th class="bg-light text-center w-25" scope="col">Descripción</th>
            <th class="bg-light text-center" scope="col">Núm conexiones</th>
            <th class="bg-light text-center" scope="col">F/H última conexión</th>
            <th class="bg-light text-center" scope="col">F/H última conexión anterior</th>
            <th class="bg-light text-center" scope="col">Perfil</th>
        </tr>
    </thead>
    <tbody id="usuarios">
    </tbody>
</table>
</div>
 <script src="webroot/js/mtoUsuarios.js"></script>