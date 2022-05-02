<div id="cajaTitulo" class="text-center p-2 h4 font-weight-bold" style="background-color:gainsboro;">INICIO PRIVADO </div>
<div id="cajaTitulo" class="text-center p-4 h4 font-weight-bold bg-transparent"></div>
<div class="jumbotron">
    <div class="container w-100 h-20 bg-light">
        <h1>Bienvenid@ <?php echo $nombreUsuario ?></h1>
        <p>es la <?php echo $numConexiones ?>ª vez que te conectas,  
              <?php if(!is_null($fechaUltimaConexionAnterior)){?>
                y la ultima conexion fue <?php echo $fFechaHoraUltimaConexion; } ?></p>
        <form class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2"  aria-label="First group">
                <input type="submit" class="btn btn-primary" value="Detalle" name="detalle"/>
            </div>
            <div class="btn-group me-2" aria-label="Second group">
                  <input type="submit" class="btn btn-secondary" value="Editar perfil" name="editar"/>
            </div>
            <div class="btn-group me-2"  aria-label="Third group">
                  <input type="submit" class="btn btn-info" value="Cerrar Sesión" name="cerrar"/>
            </div>
            <?php if($tipoUsuario == 'usuario'){ ?>
                <div class="btn-group me-2"  aria-label="Fourth group">
                      <input type="submit" class="btn btn-warning" value="Mantenimiento Departamentos" name="mantenimiento"/>
                </div>
            <?php }else{ ?>
                <div class="btn-group me-2"  aria-label="Fourth group">
                      <input type="submit" class="btn btn-warning" value="Mantenimiento Usuarios" name="mantenimientoU"/>
                </div>
            <?php }  ?>
            <div class="btn-group me-2"  aria-label="Fourth group">
                  <input type="submit" class="btn btn-danger" value="Botón fallo" name="botonF"/>
            </div>
        </form>
    </div>
</div>
