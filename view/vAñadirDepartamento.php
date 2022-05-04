<div id="cajaTitulo" class="text-center p-2 h4 font-weight-bold" style="background: gainsboro;"> ALTA DEPARTAMENTO</div><br><br><br>
<div id="template-bg-1">
    <div class="d-flex flex-column min-vh-80 justify-content-center align-items-center">
        <div class="card p-3 text-light bg-light mb-5">
            <div class="card-header text-center text-dark">
                <h3>Nuevo departamento </h3>
            </div>
            <div class="card-body w-100">
                <form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Código departamento</label>
                        <input type="text" class="form-control" id="txtFloatingUsername" name="codigoDepartamento" value="<?php echo(isset($_REQUEST['codigoDepartamento']) ? $_REQUEST['codigoDepartamento'] : null); ?>"> <?php echo($aErrores['codDep']!=null ? "<span style='color:red'>".$aErrores['codDep']."</span>" : null); ?>
                    </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" for="descripcionUsuario" style="color:black;">Descripción departamento</label>
                        <input type="text" class="form-control" id="dUsuario" name="descripcionDepartamento" value="<?php echo(isset($_REQUEST['descripcionDepartamento']) ? $_REQUEST['descripcionDepartamento'] : null); ?>"> <?php echo($aErrores['desDep']!=null ? "<span style='color:red'>".$aErrores['desDep']."</span>" : null); ?>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Volumen negocio</label>
                        <input type="text" class="form-control" id="txtFloatingUsername" name="volumenNegocio" value="<?php echo(isset($_REQUEST['volumenNegocio']) ? $_REQUEST['volumenNegocio'] : null); ?>"> <?php echo($aErrores['volNegocio']!=null ? "<span style='color:red'>".$aErrores['volNegocio']."</span>" : null); ?>
                    </div>
                    <br>
                    <div class="btn-group me-2"  aria-label="First group">
                        <input type="submit" class="btn btn-secondary btn-success w-50" value="Aceptar" name="aceptar"/>
                    </div>
                    <div class="btn-group me-2" aria-label="Second group">
                        <input type="submit" class="btn btn-info" value="Volver" name="volver"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
