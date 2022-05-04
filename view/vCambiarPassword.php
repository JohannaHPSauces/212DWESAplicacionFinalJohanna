<div id="cajaTitulo" class="text-center p-2 h4 font-weight-bold" style="background-color:gainsboro;"> CAMBIAR PASSWORD</div><br><br><br>
<div id="template-bg-1">
    <div class="d-flex flex-column min-vh-80 justify-content-center align-items-center">
        <div class="card p-3 text-light bg-light mb-5">
            <div class="card-header text-center text-dark">
                <h3>Modificar password </h3>
            </div>
            <div class="card-body w-100">
                <form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Contraseña actual</label>
                        <input type="password" class="form-control" id="txtFloatingUsername" name="viejaPassword" value="<?php echo(isset($_REQUEST['viejaPassword']) ? $_REQUEST['viejaPassword'] : null); ?>"> <?php echo($aErrores['viejaPassword']!=null ? "<span style='color:red'>".$aErrores['viejaPassword']."</span>" : null); ?> 
                    </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" for="nuevaPassword" style="color:black;">Nueva contraseña</label>
                        <input type="password" class="form-control" id="dUsuario" name="nuevaPassword" value="<?php echo(isset($_REQUEST['nuevaPassword']) ? $_REQUEST['nuevaPassword'] : null); ?>"> <?php echo($aErrores['nuevaPassword']!=null ? "<span style='color:red'>".$aErrores['nuevaPassword']."</span>" : null); ?> 
                    </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Repetir nueva contraseña</label>
                        <input type="password" class="form-control" id="txtFloatingUsername" name="repetirPassword"  value="<?php echo(isset($_REQUEST['repetirPassword']) ? $_REQUEST['repetirPassword'] : null); ?>"><?php echo($aErrores['repetirPassword']!=null ? "<span style='color:red'>".$aErrores['repetirPassword']."</span>" : null); ?>
                    </div>
                    <br>
                    <div class="btn-group me-2"  aria-label="First group">
                        <input type="submit" class="btn btn-secondary btn-success" value="Aceptar cambios" name="aceptar"/>
                    </div>
                    <div class="btn-group me-2" aria-label="Second group">
                        <input type="submit" class="btn btn-info" value="Volver" name="volver"/>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>