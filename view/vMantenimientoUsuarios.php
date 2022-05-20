<div id="cajaTitulo" class="text-center p-2 h4 font-weight-bold" style="background-color:gainsboro;">MANTENIMIENTO USUARIOS </div>
<div id="cajaTitulo" class="text-center p-4 h4 font-weight-bold bg-transparent"> </div>
<main>
<form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="submit" class="btn btn-secondary btn-info" value="Volver" name="volver"/><br><br>
    <div class="container text-center">
        <label for="txtFloatingUsername">Buscar usuario por descripción</label><br>
    </div>
    <div class="container bg-light d-flex justify-content-center">
            <div class="input-group w-50">
                <input type="text" class="form-control" id="descripcionABuscar" name="descUsuario"> 
                <span class="input-group-btn">
                   <input type="submit" class="btn btn-secondary btn-labeled" id="buscarDesc" value="Buscar" name="buscar"/>
                </span>
            </div>
    </div>
</form>
<div class="container">
<table class="table table-hover table-bordered table-striped w-100 font-weight-bold text-center">
    <thead>
        <tr>
            <th class="bg-warning text-center " scope="col">Código </th>
            <th class="bg-warning  text-center w-25" scope="col">Descripción</th>
            <th class="bg-warning  text-center" scope="col">Núm conexiones</th>
            <th class="bg-warning  text-center" scope="col">Password</th>
            <th class="bg-warning  text-center" scope="col">F/H última conexión</th>
            <th class="bg-warning  text-center" scope="col">Perfil</th>
        </tr>
    </thead>
    <tbody id="usuarios">
    </tbody>
</table>
    <br> <br> <br> <br> <br> <br>
</div>
<script>
    var xhttp= new XMLHttpRequest();
    
    var botonBuscar= document.getElementById("buscarDesc");
    var descABuscar= document.getElementById("descripcionABuscar");
    
    descABuscar.addEventListener("keyup", buscarUsuarios);
    
    cargarUsuarios();
    
    function buscarUsuarios(){
        event.preventDefault();
        cargarUsuarios(descABuscar.value);
    }
    
    function cargarUsuarios(descUsuarios=''){
        xhttp.onreadystatechange= function (){
            if(this.readyState ==4 && this.status == 200){
                mostrarUsuarios(this.responseText);
            }
        };
        xhttp.open("GET", "http://daw212.sauces.local/212DWESAplicacionFinalJohanna/API/buscarUsuarioPorDescripcion.php?descUsuario=" + descUsuarios, true);
        xhttp.setRequestHeader("Content-type", "application/json");
        xhttp.send("Your JSON Data Here");
    }
    
    
    function mostrarUsuarios(usuarios){
        var contenidoTabla= document.getElementById("usuarios");
        contenidoTabla.innerHTML= '';
        let objetoJSON= JSON.parse(usuarios);
        
        let nuevaFila;
        
        for(Usuario of objetoJSON){
            nuevaFila= document.createElement("tr");
            let nuevaCelda;
            
            for(key in Usuario){
                nuevaCelda= document.createElement("td");
                switch(key){
                    case 'password':
                        nuevaCelda.innerHTML="**********";
                            
                        break;
                    case 'fechaHoraUltimaConexion':
                        if(Usuario['fechaHoraUltimaConexion']===null){
                         nuevaCelda.innerHTML= '';
                        }else{
                            let oFecha = new Date(parseInt(Usuario['fechaHoraUltimaConexion']) * 1000);
                            ultimaConexionMostrar = `${oFecha.getDate()}/${oFecha.getMonth() + 1}/${oFecha.getFullYear()} a las ${oFecha.getHours()}:${oFecha.getMinutes()}:${oFecha.getSeconds()}`;
                    
                            nuevaCelda.innerHTML= ultimaConexionMostrar;
                        }
                        break;
                    default:
                        nuevaCelda.innerHTML = Usuario[key]??'-';
                        break;
                }
                nuevaFila.appendChild(nuevaCelda);
            }
            //nuevaFila.appendChild(nuevaCelda);
            contenidoTabla.appendChild(nuevaFila);
        }
        
    }
</script>
