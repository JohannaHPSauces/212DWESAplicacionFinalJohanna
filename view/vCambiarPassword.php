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
                        <div class="input-group">
                            <input ID="password" type="Password" Class="form-control"  name="viejaPassword" value="<?php echo(isset($_REQUEST['viejaPassword']) ? $_REQUEST['viejaPassword'] : null); ?>"> 
                            <div class="input-group-append">
                                <button id="show_password" class="btn btn-primary h-100" type="button" onclick="mostrarPassword()">  <span class="fa fa-eye-slash icon"></span> </button><br>
                           </div>
                        </div>
                        <?php echo($aErrores['viejaPassword']!=null ? "<span style='color:red'>".$aErrores['viejaPassword']."</span>" : null); ?>  
                   </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" for="nuevaPassword" style="color:black;">Nueva contraseña</label>
                        <div class="input-group">
                            <input ID="password1" type="Password" Class="form-control" name="nuevaPassword" value="<?php echo(isset($_REQUEST['nuevaPassword']) ? $_REQUEST['nuevaPassword'] : null); ?>"> 
                            <div class="input-group-append">
                                  <button id="show_password" class="btn btn-primary h-100" type="button" onclick="mostrarPassword1()">  <span class="fa fa-eye-slash icon"></span> </button>
                            </div>
                        </div>
                        <?php echo($aErrores['nuevaPassword']!=null ? "<span style='color:red'>".$aErrores['nuevaPassword']."</span>" : null); ?> 
                    </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Repetir nueva contraseña</label>
                        <div class="input-group">
                            <input ID="password2" type="Password" Class="form-control" id="txtFloatingUsername" name="repetirPassword"  value="<?php echo(isset($_REQUEST['repetirPassword']) ? $_REQUEST['repetirPassword'] : null); ?>">
                            <div class="input-group-append">
                                <button id="show_password" class="btn btn-primary h-100" type="button" onclick="mostrarPassword2()">  <span class="fa fa-eye-slash icon"></span> </button>
                            </div>
                        </div>
                        <?php echo($aErrores['repetirPassword']!=null ? "<span style='color:red'>".$aErrores['repetirPassword']."</span>" : null); ?>
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
