<div id="cajaTitulo" class="text-center p-2 h4 font-weight-bold" style="background-color:gainsboro;">MANTENIMIENTO DEPARTAMENTOS </div>
<div id="cajaTitulo" class="text-center p-4 h4 font-weight-bold bg-transparent"> </div>
<div class="container h-100"> 
    <form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group floating-control-group w-100 bg-light">
            <label for="txtFloatingUsername">Buscar Departamento:</label><br>
            <div class="input-group w-50">
                <input type="text" class="form-control" id="txtFloatingUsername" name="desDepartamento" value="<?php echo isset($_SESSION['criterioBusquedaDepartamentos']['descripcionBuscada']) ? $_SESSION['criterioBusquedaDepartamentos']['descripcionBuscada'] : ''; ?> "/> 
                <span class="input-group-btn">
                   <input type="submit" class="btn btn-secondary btn-info" value="Buscar" name="buscar"/>
                </span>
            </div>
             <input type="radio" name="estado" value="todos" id="departamentoTodos" <?php echo isset($_SESSION['criterioBusquedaDepartamentos']['estado'])?($_SESSION['criterioBusquedaDepartamentos']['estado']==0?'checked':''):'checked'; ?>/>
                <label for="departamentoTodos">Todos</label>
                <input type="radio" name="estado" value="alta" id="departamentoAlta" <?php echo isset($_SESSION['criterioBusquedaDepartamentos']['estado'])?($_SESSION['criterioBusquedaDepartamentos']['estado']==1?'checked':''):''; ?>/>
                <label for="departamentoAlta">Alta</label>
                <input type="radio" name="estado" value="baja" id="departamentoBaja" <?php echo isset($_SESSION['criterioBusquedaDepartamentos']['estado'])?($_SESSION['criterioBusquedaDepartamentos']['estado']==2?'checked':''):'';  ?> />
                <label for="departamentoBaja">Baja</label><br><br>
            <!--<input type="submit" class="btn btn-secondary btn-info" value="Buscar" name="buscar"/>-->
            <input type="submit" class="btn btn-secondary btn-labeled" value="Volver" name="volver"/>
            <input type="submit" class="btn btn-secondary btn-success" value="Añadir" name="añadir"/>
    
        </div><br>
        <table class="table table-bordered w-100 align-items-center font-weight-bold">
            <thead>
                <tr>
                    <th class="bg-light text-center  " scope="col">Código</th>
                    <th class="bg-light text-center w-25" scope="col">Descripción</th>
                    <th class="bg-light text-center" scope="col">Volumen negocio</th>
                    <th class="bg-light text-center" scope="col">Fecha de alta</th>
                    <th class="bg-light text-center" scope="col">Fecha de baja</th>
                    <th class="bg-light text-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
             <?php  if ($aDepartamentosVista) {
                        foreach ($aDepartamentosVista as $oDepartamento) { ?>
                <?php if (empty($oDepartamento['fechaBaja'])) { ?> 
                <tr>
                    <td class="bg-success text-center " style="font-weight:bold;"><?php echo $oDepartamento['codDepartamento']; ?></td>
                    <td class="bg-success text-center " style="font-weight:bold;"><?php echo $oDepartamento['descDepartamento']; ?></td>
                    <td class="bg-success text-center " style="font-weight:bold;"><?php echo $oDepartamento['volumenNegocio']; ?></td>
                    <td class="bg-success text-center " style="font-weight:bold;"><?php echo $oDepartamento['fechaAlta']; ?></td>
                    <td class="bg-success text-center " style="font-weight:bold;"><?php echo $oDepartamento['fechaBaja']; ?></td>
                    <td class="text-center bg-light">
                        <button type="submit" class="btn btn-labeled btn-primary" name="editar" value="<?php echo $oDepartamento['codDepartamento']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>
                        </button>
                        <?php if (empty($oDepartamento['fechaBaja'])) { ?>
                        <button type="submit" class="btn btn-labeled btn-danger" name="baja" value="<?php echo $oDepartamento['codDepartamento']; ?>">
                            <i class="fas fa-arrow-alt-circle-down"></i>
                        </button>
                        <?php }else{ ?>
                        <button type="submit" class="btn btn-labeled btn-success" name="rehabilitar" value="<?php echo $oDepartamento['codDepartamento']; ?>">
                            <i class="fas fa-arrow-alt-circle-up"></i>
                        </button>
                        <?php } ?>
                        <button type="submit" class="btn btn-labeled btn-warning" name="borrar" value="<?php echo $oDepartamento['codDepartamento']; ?>">
                            <span class="btn-label"><i class="fa fa-trash"></i></span>
                        </button>
                    </td>
                </tr>
                 <?php }else{ ?>
                <tr>
                    <td class="bg-danger text-center " style="font-weight:bold;"><?php echo $oDepartamento['codDepartamento']; ?></td>
                    <td class="bg-danger text-center " style="font-weight:bold;"><?php echo $oDepartamento['descDepartamento']; ?></td>
                    <td class="bg-danger text-center " style="font-weight:bold;"><?php echo $oDepartamento['volumenNegocio']; ?></td>
                    <td class="bg-danger text-center " style="font-weight:bold;"><?php echo $oDepartamento['fechaAlta']; ?></td>
                    <td class="bg-danger text-center " style="font-weight:bold;"><?php echo $oDepartamento['fechaBaja']; ?></td>
                    <td class="text-center bg-light">
                        <button type="submit" class="btn btn-labeled btn-primary" name="editar" value="<?php echo $oDepartamento['codDepartamento']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>
                        </button>
                        <?php if (empty($oDepartamento['fechaBaja'])) { ?>
                        <button type="submit" class="btn btn-labeled btn-danger" name="baja" value="<?php echo $oDepartamento['codDepartamento']; ?>">
                            <i class="fas fa-arrow-alt-circle-down"></i>
                        </button>
                        <?php }else{ ?>
                        <button type="submit" class="btn btn-labeled btn-success" name="rehabilitar" value="<?php echo $oDepartamento['codDepartamento']; ?>">
                            <i class="fas fa-arrow-alt-circle-up"></i>
                        </button>
                        <?php } ?>
                        <button type="submit" class="btn btn-labeled btn-warning" name="borrar" value="<?php echo $oDepartamento['codDepartamento']; ?>">
                            <span class="btn-label"><i class="fa fa-trash"></i></span>
                        </button>
                    </td>
                </tr>
                <?php } ?>
                    <?php } 
                    } ?>
            </tbody>
        </table>
            <div class="container ">
                <nav aria-label="Page navigation example">
                <ul class="pagination text-center float-end">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
    </form>
</div> 