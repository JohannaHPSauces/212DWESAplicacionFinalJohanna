<div id="cajaTitulo" class="text-center p-2 h4 font-weight-bold" style="background-color:gainsboro;"> EDITAR PERFIL</div><BR><BR>
<div id="template-bg-1">
    <div class="d-flex flex-column min-vh-80 justify-content-center align-items-center">
        <div class="card p-3 text-light bg-light mb-5">
            <div class="card-header text-center text-dark">
                <h3>Mi Cuenta </h3>
            </div>
            <div class="card-body w-100">
                <form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Nombre usuario</label>
                        <input type="text" class="form-control" id="txtFloatingUsername" value="<?php echo $nombreUsuario ?>" disabled>
                    </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" for="descripcionUsuario" style="color:black;">Descripción usuario</label>
                        <input type="text" class="form-control" id="dUsuario" name="descripcionUsuario" value="<?php echo $desUsuario?><?php echo(isset($_REQUEST['descripcionUsuario']) ? $_REQUEST['descripcionUsuario'] : null); ?>"><?php echo($aErrores['dUsuario']!=null ? "<span style='color:red'>".$aErrores['dUsuario']."</span>" : null); ?> 
                    </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Número conexiones</label>
                        <input type="text" class="form-control" id="txtFloatingUsername" value="<?php echo $numConexiones ?>" disabled>
                    </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Fecha y hora última conexión</label>
                        <input type="text" class="form-control" id="txtFloatingUsername" value="<?php echo $fFechaHoraUltimaConexion1 ?>" disabled>
                    </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Tipo de usuario</label>
                        <input type="text" class="form-control" id="txtFloatingUsername" value="<?php echo $tipoUsuario ?>" disabled>
                    </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Contraseña</label>
                        <input type="password" class="form-control" id="txtFloatingUsername" value="<?php echo $passwordUsuario ?>" disabled>
                    </div>
                    
                    <div class="form-group mt-4">
                        <input type="submit" value="Cambiar contraseña" class="btn btn-primary float-end text-white w-100" name="cambiar"> <br><br>
                    </div>
                    <div class="btn-group me-2"  aria-label="First group">
                        <input type="submit" class="btn btn-secondary btn-success" value="Aceptar cambios" name="aceptar"/>
                    </div>
                    <div class="btn-group me-2" aria-label="Second group">
                        <input type="submit" class="btn btn-info" value="Volver" name="volver"/>
                    </div>
                    <div class="btn-group"  aria-label="Third group">
                    <input type="submit" class="btn btn-danger" value="Eliminar cuenta" name="eliminar"/>  
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>