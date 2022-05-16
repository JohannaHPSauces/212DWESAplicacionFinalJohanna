<div id="cajaTitulo" class="text-center p-2 h4 font-weight-bold" style="background-color:gainsboro;">REST </div>
<form>
    <input type="submit" class="btn btn-secondary btn-info " value="Volver" name="volver" >
</form>
<div class="container w-50 h-20 bg-light">
<form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
    <p class="text-center h2" style="text-weight:bold; background:lightgrey; padding: 5px;">Tiempo de provincia<p>
        <p>Permite obtener el tiempo actual de la provincia. El formato del campo es una lista desplegable con las provincias en la cual hay que elegir una. La informacion se trata con códigos de provincia.</p>
                <div class="container auto">
                    <?php 
                    $opciones = [
                        ['value' => "01", "nombre" => "ALAVA"],
                        ['value' => "02", "nombre" => "ALBACETE"],
                        ['value' => "03", "nombre" => "ALICANTE"],
                        ['value' => "04", "nombre" => "ALMERIA"],
                        ['value' => "33", "nombre" => "ASTURIAS"],
                        ['value' => "05", "nombre" => "AVILA"],
                        ['value' => "06", "nombre" => "BADAJOZ"],
                        ['value' => "08", "nombre" => "BARCELONA"],
                        ['value' => "09", "nombre" => "BURGOS"],
                        ['value' => "10", "nombre" => "CACERES"],
                        ['value' => "11", "nombre" => "CADIZ"],
                        ['value' => "39", "nombre" => "CANTABRIA"],
                        ['value' => "12", "nombre" => "CASTELLON"],
                        ['value' => "51", "nombre" => "CEUTA"],
                        ['value' => "13", "nombre" => "CIUDAD REAL"],
                        ['value' => "14", "nombre" => "CORDOBA"],
                        ['value' => "15", "nombre" => "CORUÑA"],
                        ['value' => "16", "nombre" => "CUENCA"],
                        ['value' => "17", "nombre" => "GIRONA"],
                        ['value' => "18", "nombre" => "GRANADA"],
                        ['value' => "19", "nombre" => "GUADALAJARA"],
                        ['value' => "20", "nombre" => "GUIPUZKOA"],
                        ['value' => "21", "nombre" => "HUELVA"],
                        ['value' => "22", "nombre" => "HUESCA"],
                        ['value' => "23", "nombre" => "JAEN"],
                        ['value' => "24", "nombre" => "LEON"],
                        ['value' => "25", "nombre" => "LLEIDA"],
                        ['value' => "27", "nombre" => "LUGO"],
                        ['value' => "28", "nombre" => "MADRID"],
                        ['value' => "29", "nombre" => "MALAGA"],
                        ['value' => "52", "nombre" => "MELILLA"],
                        ['value' => "30", "nombre" => "MURCIA"],
                        ['value' => "31", "nombre" => "NAVARRA"],
                        ['value' => "32", "nombre" => "OURENSE"],
                        ['value' => "34", "nombre" => "PALENCIA"],
                        ['value' => "35", "nombre" => "LAS PALMAS"],
                        ['value' => "36", "nombre" => "PONTEVEDRA"],
                        ['value' => "26", "nombre" => "LA RIOJA"],
                        ['value' => "37", "nombre" => "SALAMANCA"],
                        ['value' => "38", "nombre" => "TENERIFE"],
                        ['value' => "40", "nombre" => "SEGOVIA"],
                        ['value' => "41", "nombre" => "SEVILLA"],
                        ['value' => "42", "nombre" => "SORIA"],
                        ['value' => "43", "nombre" => "TARRAGONA"],
                        ['value' => "44", "nombre" => "TERUEL"],
                        ['value' => "45", "nombre" => "TOLEDO"],
                        ['value' => "46", "nombre" => "VALENCIA"],
                        ['value' => "47", "nombre" => "VALLADOLID"],
                        ['value' => "48", "nombre" => "VIZCAYA"],
                        ['value' => "49", "nombre" => "ZAMORA"],
                        ['value' => "50", "nombre" => "ZARAGOZA"]
                    ];
                                
                    ?>
                    <label for="buscarInput"><p>Código Provincia*<a href="https://www.el-tiempo.net/api" target="_blank">info</a></p></label>
                    <select required name="buscarInput" id="CodProvincia">
                        <option value="">Seleccione...</option>
                        <?php foreach($opciones as $key => $opcion){ ?>
                            <?php if($opcion['value'] == $_SESSION['nombreProvincia']=$_REQUEST['buscarInput']){ ?>
                                <option selected value="<?= $opcion['value'] ?>"><?= $opcion['nombre'] ?></option>
                            <?php }else{ ?>
                                <option value="<?= $opcion['value'] ?>"><?= $opcion['nombre'] ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                    <p><?php echo($aErrores['eBuscarInput']!=null ? "<span style='color:red'>".$aErrores['eBuscarInput']."</span>" : null); ?></p>
                    <p><?php echo($aErrores['eResultado']!=null ? "<span style='color:red'>".$aErrores['eResultado']."</span>" : null); ?></p>
                </div>
            <input type="submit" class="btn btn-secondary btn-labeled" value="Buscar" name="buscar" />
</form>
</div>
<div class="container w-50">
   <?php if ($aErrores["eBuscarInput"] == null && isset($_REQUEST["buscar"]) && $oResultadoBuscarProvincia != null) { ?>
        <p class="h4 text-center text-info"><?php echo $nombreProvincia;?></p>
        <p><span class="" style="font-weight:bold;">ID Provincia:</span> <?php echo $idProvincia;?></p>
        <p><span class="" style="font-weight:bold;">Descripcion:</span> <?php echo $descripcionProvincia;?></p>
        <p><span class="" style="font-weight:bold;">Tiempo:</span> <?php echo $tiempoProvincia;?></p>
        <p>
           <span class="" style="font-weight:bold;">Temperatura maxima:</span> <?php echo $tempMaximaProvincia;?> °C<br>
           <span class="" style="font-weight:bold;">Temperatura minima:</span> <?php echo $tempMinimaProvincia;?> °C
        </p>
    <?php } ?>
</div><br>
<div class="container w-50 h-20 bg-light">
<form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
    <p class="text-center h2" style="text-weight:bold; background:lightgrey; padding: 5px;">Usuario Random<p>
        <p>Permite obtener usuarios de forma aleatoria. El formato del campo es un input donde poner un número del 1-5.</p>
                <div class="container auto">
                    <label for="buscarInputU"><p>Número de usuarios:</p></label>
                    <input type="text" class="form-control w-25" placeholder="Introduce del 1 al 5" name="buscarInputU" value="<?php echo(isset($_REQUEST['buscarInputU']) ? $_REQUEST['buscarInputU'] : null); ?>"><br>
                    
                    <p><?php echo($aErroresU['eBuscarInputU']!=null ? "<span style='color:red'>".$aErroresU['eBuscarInputU']."</span>" : null); ?></p>
                    <p><?php echo($aErroresU['eResultadoU']!=null ? "<span style='color:red'>".$aErroresU['eResultadoU']."</span>" : null); ?></p>
                </div>
            <input type="submit" class="btn btn-secondary btn-labeled" value="Buscar" name="buscarU" />
</form>
</div>
<div class="container w-50 text-center">
   <?php if ($aErroresU["eBuscarInputU"] == null && isset($_REQUEST["buscarU"]) && $oResultadoBuscarUsuario != null) { ?>
    <p class="h4 text-center text-info"><?php echo "<img src=$foto width='200' height='200'>"  ;?></p>
        <p><span class="text-center" style="font-weight:bold;">Nombre:</span> <?php echo $nombreU;?></p>
        <p><span class="text-center" style="font-weight:bold;">Apellido:</span> <?php echo $apellidoU;?></p>
        <p><span class="text-center" style="font-weight:bold;">Calle:</span> <?php echo $calleU;?></p>
        <p><span class="text-center" style="font-weight:bold;">Pais:</span> <?php echo $paisU;?></p>
        <p><span class="text-center" style="font-weight:bold;">Email:</span> <?php echo $emailU;?></p>
        <p><span class="text-center" style="font-weight:bold;">Edad:</span> <?php echo $edadU;?></p>
    <?php } ?>
</div><br>
<div class="container w-50 h-20 bg-light">
<form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
    <p class="text-center h2" style="text-weight:bold; background:lightgrey; padding: 5px;">Informacion bebida<p>
        <p>Permite obtener la información de una bebida. El formato del campo es una lista.</p>
                 <div class="container auto">
                    <?php 
                    $opciones = [
                        ['value' => "Margarita", "nombre" => "MARGARITA"],
                        ['value' => "Negroni", "nombre" => "NEGRONI"],
                        ['value' => "Mojito", "nombre" => "MOJITO"],
                        ['value' => "Whiskey Sour", "nombre" => "WHISKEY SOUR"],
                        ['value' => "Daiquiri", "nombre" => "ASTURIAS"],
                        ['value' => "Apricot punch", "nombre" => "APRICOT PUNCH"],
                        ['value' => "Planter’s Punch", "nombre" => "PLANTER'S PUNCH"],
                        ['value' => "Manhattan", "nombre" => "MANHATTAN"],
                        ['value' => "Vampiro", "nombre" => "VAMPIRO"],
                        ['value' => "Pink Lady", "nombre" => "PINK LADY"],
                        ['value' => "Belgian Blue", "nombre" => "BELGIAN BLUE"],
                        ['value' => "Diesel", "nombre" => "DIESEL"],
                        ['value' => "Yoghurt Cooler", "nombre" => "OGHURT COOLER"],
                        ['value' => "Sangria", "nombre" => "SANGRIA"],
                        ['value' => "Strawberry Lemonade", "nombre" => "STRAWBERRY LEMONADE"],
                        ['value' => "Snakebite and Black", "nombre" => "SNAKEBITE"],
                        ['value' => "Bob Marley", "nombre" => "BOB MARLEY"],
                        ['value' => "Casa Blanca", "nombre" => "CASA BLANCA"],
                        ['value' => "Espresso Martini", "nombre" => "EXPRESSP MARTINI"],
                        ['value' => "Flaming Lamborghini", "nombre" => "FLAMING LAMBORGHINI"],
                        ['value' => "Figgy Thyme", "nombre" => "FIGGY THYME"],
                        ['value' => "Iced Coffee", "nombre" => "ICE-COFFEE"],
                        ['value' => "Kamikaze", "nombre" => "KAMIKAZE"],
                        ['value' => "Kiwi Papaya Smoothie", "nombre" => "KIWI PAPAYA"],
                        ['value' => "Long vodka", "nombre" => "LONG VODKA"],
                        ['value' => "Mimosa", "nombre" => "MIMOSA"]
                    ];
                                
                    ?>
                    <label for="buscarInputC"><p>Elige un Cóctel</label>
                    <select required name="buscarInputC" id="CodProvincia">
                        <option value="">Seleccione...</option>
                        <?php foreach($opciones as $key => $opcion){ ?>
                            <?php if($opcion['value'] == $_SESSION['nombreCoctel']=$_REQUEST['buscarInputC']){ ?>
                                <option selected value="<?= $opcion['value'] ?>"><?= $opcion['nombre'] ?></option>
                            <?php }else{ ?>
                                <option value="<?= $opcion['value'] ?>"><?= $opcion['nombre'] ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                    <p><?php echo($aErroresC['eBuscarInputC']!=null ? "<span style='color:red'>".$aErroresC['eBuscarInputC']."</span>" : null); ?></p>
                    <p><?php echo($aErroresC['eResultadoC']!=null ? "<span style='color:red'>".$aErroresC['eResultadoC']."</span>" : null); ?></p>
                </div>
            <input type="submit" class="btn btn-secondary btn-labeled" value="Buscar" name="buscarC" />
</form>
</div>
<div class="container w-50 text-center">
   <?php if ($aErroresC["eBuscarInputC"] == null && isset($_REQUEST["buscarC"]) && $oResultadoBuscarCoctel != null) { ?>
        <p class="h4 text-center text-info"><?php echo "<img src=$foto width='200' height='200'>"  ;?></p>
        <p><span class="text-center" style="font-weight:bold;">Nombre:</span> <?php echo $nombreC;?></p>
        <p><span class="text-center" style="font-weight:bold;">Categoria:</span> <?php echo $categoriaC;?></p>
        <p><span class="text-center text-danger"" style="font-weight:bold;">Ingredientes:</span><br> <?php echo $ingrediente1C.',';?>
        <span class="text-center" style="font-weight:bold;"></span> <?php if(!is_null($ingrediente2C)){ echo $ingrediente2C.','; }else{ echo ''; };?>
        <span class="text-center" style="font-weight:bold;"></span> <?php if(!is_null($ingrediente3C)){ echo $ingrediente3C.','; }else{ echo ''; };?>
        <span class="text-center"  style="font-weight:bold;"></span> <?php if(!is_null($ingrediente4C)){ echo $ingrediente4C; }else{ echo ''; };?></p>
    <?php } ?>
</div>
<br><br><br><br><br><br><br><br>

