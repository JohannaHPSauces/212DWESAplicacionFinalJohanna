let xhttp = new XMLHttpRequest();
var descripcionABuscar = document.getElementById("descripcionABuscar");   
                    
mostrarUsuarios();


 let botonBuscar = document.getElementById("buscarDesc");

 botonBuscar.addEventListener("click",function(event){
             mostrarUsuarios();
 });

            
function mostrarUsuarios(){
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let tabla=document.getElementById("usuarios");
            tabla.innerHTML = "";
            let respuesta=xhttp.responseText;
            let respuestaJson=JSON.parse(respuesta);
            for(let usuario of respuestaJson.usuarios){
                let fila = document.createElement("tr");
                let codUsuario = usuario.T01_CodUsuario;
                for(let campo in usuario){
                    if(campo !== "T01_Password"){
                        let celda=document.createElement("td");
                            if(campo === "T01_FechaHoraUltimaConexion" && usuario[campo]!==null){
                                let oFecha = new Date(usuario[campo] * 1000);
                                usuario[campo]=`${oFecha.getDate()}/${oFecha.getMonth()+1}/${oFecha.getFullYear()}, a las ${oFecha.getHours()}:${oFecha.getMinutes()}:${oFecha.getSeconds()}`;
                            }
                            if(campo === "T01_DescUsuario"){
                                let campoTexto = document.createElement("input");
                                campoTexto.setAttribute("type", "text");
                                campoTexto.setAttribute("id", codUsuario);
                                campoTexto.setAttribute("value", usuario[campo]);
                                celda.appendChild(campoTexto);
                            }else{
                                celda.innerHTML=usuario[campo];
                            }
                        }
                        fila.appendChild(celda);
                    }

                }
            }
        }
    xhttp.open("GET", `http://192.168.1.112/212DWESAplicacionFinalJohanna/API/buscarUsuarioPorDescripcion.php?descUsuario=${descripcionABuscar.value}`, true);
    xhttp.send();
}