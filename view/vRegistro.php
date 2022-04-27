 <div id="cajaTitulo" class="text-center p-2 h4 font-weight-bold bg-transparent"></div>
<div id="template-bg-1">
    <div class="d-flex flex-column min-vh-80 justify-content-center align-items-center">
        <div class="card p-3 text-light bg-light mb-5">
            <div class="card-header text-center text-dark">
                <h3>Registrarse </h3>
            </div>
            <div class="card-body w-100">
                <form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Nombre usuario</label>
                        <input type="text" class="form-control" id="txtFloatingUsername" name="nombreUsuario">
                    </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" for="descripcionUsuario" style="color:black;">Descripción usuario</label>
                        <input type="text" class="form-control" id="dUsuario" name="descripcionUsuario" > 
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Contraseña</label>
                        <input type="text" class="form-control" id="txtFloatingUsername" name="password" > 
                    </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Repetir ontraseña</label>
                        <input type="password" class="form-control" id="txtFloatingUsername" name="repetirPassword" > 
                    </div>
                    <br>
                    <div class="btn-group me-2"  aria-label="First group">
                        <input type="submit" class="btn btn-secondary btn-success" value="Aceptar" name="aceptar"/>
                    </div>
                    <div class="btn-group me-2" aria-label="Second group">
                        <input type="submit" class="btn btn-info" value="Volver" name="volver"/>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
