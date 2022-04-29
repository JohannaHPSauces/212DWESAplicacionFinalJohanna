<header>
    <div id="cajaTitulo" class="text-center p-2 h4 font-weight-bold" style="background-color:gainsboro;">DETALLE </div>
    <form>
        <input type="submit" class="btn btn-info" style="font-weight:bold;" value="VOLVER" name="cerrar"/>
    </form>
</header>
<br>

<!----------------------- SESSION -------------------------->
<p class="h3 text-center">VARIABLE<mark>$_SESSION</mark></p>
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="bg-light" scope="col">Clave</th>
            <th class="bg-light" scope="col">Valor</th>
        </tr>
    </thead>
        <?php  foreach ($_SESSION as $clave => $valor) { ?>
    <tbody>
        <tr>
            <td> <?php echo $clave ?> </td>
            <td> <?php print_r($valor) ?></td>
        </tr>
        <?php  } ?>
    </tbody>
</table>
<!----------------------- COOKIE -------------------------->
<p class="h3 text-center">VARIABLE <mark>$_COOKIE</mark></p>
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="bg-light" scope="col">Clave</th>
            <th class="bg-light" scope="col">Valor</th>
        </tr>
    </thead>
        <?php  foreach ($_COOKIE as $clave => $valor) { ?>
    <tbody>
        <tr>
        <?php  echo "<td>$clave</td>";
        echo "<td>$valor</td>";?>
        </tr>
        <?php  } ?>
    </tbody>
</table>
<!----------------------- SERVER -------------------------->
<p class="h3 text-center">VARIABLE <mark>$_SERVER</mark></p>
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="bg-light" scope="col">Clave</th>
            <th class="bg-light" scope="col">Valor</th>
        </tr>
    </thead>
        <?php  foreach ($_SERVER as $clave => $valor) { ?>
    <tbody>
        <tr>
        <?php  echo "<td>$clave</td>";
        echo "<td>$valor</td>";?>
        </tr>
        <?php  } ?>
    </tbody>
</table>
<br><br><br> 