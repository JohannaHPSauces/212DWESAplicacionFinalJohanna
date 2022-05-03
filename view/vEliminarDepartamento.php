 <div id="cajaTitulo" class="text-center p-5 h4 font-weight-bold bg-transparent"></div>
<div id="template-bg-1">
    <div class="d-flex flex-column min-vh-80 justify-content-center align-items-center">
        <div class="card p-3 text-light bg-light mb-5">
            <div class="card-header text-center text-dark">
                <h3>¿DESEA ELIMINAR EL DEPARTAMENTO? </h3>
            </div>
            <div class="card-body w-100">
                <form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group floating-control-group text-center">
                        <label for="txtFloatingUsername" style="color:black;">Código departamento:</label>
                        <input type="text" class="form-control text-center " name="codDepartamento" value="<?php echo $aDepartamento['codDepartamento'] ?>" disabled=""> <br>
                    </div>
                    <div class="form-group floating-control-group text-center">
                        <label for="txtFloatingUsername"  style="color:black;">Descripción departamento:</label>
                        <input type="text" class="form-control text-center"  name="descripcionDepartamento" value="<?php echo $aDepartamento['descDepartamento'] ?>" disabled=""> <br>
                    </div>
                        <input type="submit" value="Aceptar" class="btn btn-danger float-end text-white w-100" name="aceptar"> <br><br>
                        <input type="submit" value="Cancelar" class="btn btn-primary float-end text-white w-100" name="cancelar"><br><br>
                    
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


