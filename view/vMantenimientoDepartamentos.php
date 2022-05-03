<div id="cajaTitulo" class="text-center p-2 h4 font-weight-bold" style="background-color:gainsboro;">MANTENIMIENTO DEPARTAMENTOS </div>
<div id="cajaTitulo" class="text-center p-4 h4 font-weight-bold bg-transparent"> </div>
<div class="container h-100"> 
    <form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group floating-control-group w-25">
            <label for="txtFloatingUsername" style="color:black;">Buscar Departamento:</label>
            <input type="text" class="form-control" id="txtFloatingUsername" name="buscarDep" value="<?php echo(isset($_REQUEST['buscarDep']) ? $_REQUEST['buscarDep'] : null); ?>"><?php echo($aErrores['dDepartamento']!=null ? "<span style='color:red'>".$aErrores['dDepartamento']."</span>" : null); ?>
            <input type="submit" class="btn btn-secondary btn-info" value="Buscar" name="buscar"/>
            <input type="submit" class="btn btn-secondary btn-labeled" value="Volver" name="volver"/>
        </div><br>
        <table class="table table-bordered w-100 align-items-center">
            <thead>
                <tr>
                    <th class="bg-light text-center " scope="col">Codigo</th>
                    <th class="bg-light text-center w-25" scope="col">Descripcion</th>
                    <th class="bg-light text-center" scope="col">Volumen negocio</th>
                    <th class="bg-light text-center" scope="col">Fecha de alta</th>
                    <th class="bg-light text-center" scope="col">Fecha de baja</th>
                    <th class="bg-light text-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
             <?php  if ($aDepartamentosVista) {
                        foreach ($aDepartamentosVista as $aDepartamento) { ?>
                <tr>
                    <td><?php echo $aDepartamento['codDepartamento']; ?></td>
                    <td><?php echo $aDepartamento['descDepartamento']; ?></td>
                    <td><?php echo $aDepartamento['volumenNegocio']; ?></td>
                    <td><?php echo $aDepartamento['fechaAlta']; ?></td>
                    <td><?php echo $aDepartamento['fechaBaja']; ?></td>
                    <td class="text-center">
                        <button type="submit" class="btn btn-labeled btn-danger" name="editar">
                            <i class="fas fa-pen"></i>
                            <i class="fas fa-pencil"></i>
                            <i class="fad fa-pencil"></i>
                        </button>
                        <button type="submit" class="btn btn-labeled btn-danger" name="baja">
                            <i class="fas fa-arrow-alt-circle-down"></i>
                            <i class="fas fa-arrow-alt-circle-up"></i>
                            <i class="far fa-arrow-alt-down"></i>
                        </button>
                        <button type="submit" class="btn btn-labeled btn-warning" name="borrar">
                            <span class="btn-label"><i class="fa fa-trash"></i></span>
                        </button>
                    </td>
                </tr>
                    <?php } 
                    }?>
            </tbody>
        </table>
    </form>
</div> 


