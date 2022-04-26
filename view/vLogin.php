 <div id="cajaTitulo" class="text-center p-5 h4 font-weight-bold bg-transparent"></div>
<div id="template-bg-1">
    <div class="d-flex flex-column min-vh-80 justify-content-center align-items-center">
        <div class="card p-3 text-light bg-light mb-5">
            <div class="card-header text-center text-dark">
                <h3>Iniciar sesión </h3>
            </div>
            <div class="card-body w-100">
                <form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i class="fas fa-user "></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Usuario" name="usuario" value="<?php echo(isset($_REQUEST['usuario']) ? $_REQUEST['usuario'] : null); ?>"><?php echo($aErrores['usuario']!=null ? "<span style='color:red'>".$aErrores['usuario']."</span>" : null); ?>
                    </div>
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" value="<?php echo(isset($_REQUEST['password']) ? $_REQUEST['password'] : null); ?>"><?php echo($aErrores['password']!=null ? "<span style='color:red'>".$aErrores['password']."</span>" : null); ?>
                    </div>
                    <div class="form-group mt-4">
                        <input type="submit" value="Entrar" class="btn btn-primary float-end text-white w-100" name="entrar"> <br><br>
                         <input type="submit" value="Volver" class="btn btn-primary float-end text-white w-100" name="volver"><br><br>
                        <input type="submit" value="Registrarse" class="btn btn-primary float-end text-white w-100" name="registrarse"><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
