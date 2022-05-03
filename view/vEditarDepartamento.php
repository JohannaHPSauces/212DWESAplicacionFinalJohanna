 <div id="cajaTitulo" class="text-center p-2 h4 font-weight-bold bg-transparent"> </div>
<div id="template-bg-1">
    <div class="d-flex flex-column min-vh-80 justify-content-center align-items-center">
        <div class="card p-3 text-light bg-light mb-5">
            <div class="card-header text-center text-dark">
                <h3>Editar Departamento </h3>
            </div>
            <div class="card-body w-100">
                <form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Codigo Departamento: </label>
                        <input type="text" class="form-control" id="txtFloatingUsername" value="<?php echo $aDepartamento['codDepartamento'] ?>" disabled>
                    </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" for="descripcionDepartamento" style="color:black;">Descripción usuario</label>
                        <input type="text" class="form-control" id="dUsuario" name="descripcionDepartamento" value="<?php echo isset($_REQUEST['descripcionDepartamento']) ? $_REQUEST['descripcionDepartamento'] : $aDepartamento['descDepartamento']; ?>"><?php echo($aErrores['dDepartamento']!=null ? "<span style='color:red'>".$aErrores['dDepartamento']."</span>" : null); ?> 
                    </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Volumen negocio</label>
                        <input type="text" class="form-control" id="txtFloatingUsername" name="volumenNegocio" value="<?php echo isset($_REQUEST['volumenNegocio']) ? $_REQUEST['volumenNegocio'] : $aDepartamento['volumenNegocio']; ?>"><?php echo($aErrores['vNegocio']!=null ? "<span style='color:red'>".$aErrores['vNegocio']."</span>" : null); ?> 
                    </div>
                    <div class="form-group floating-control-group">
                        <label for="txtFloatingUsername" style="color:black;">Fecha creación:</label>
                        <input type="text" class="form-control" id="txtFloatingUsername" value="<?php echo $aDepartamento['fechaCreacionDepartamento'] ?>" disabled>
                    </div><br>
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