<?php
include("conexion.php");

if (isset($_POST["send"])) {

    if (
        strlen(trim($_POST["estado"])) >= 1 &&
        is_numeric($_POST["reposicion"]) && $_POST["reposicion"] >= 0 &&
        strlen(trim($_POST["pedidos"])) >= 1 &&
        strlen(trim($_POST["pallet"])) >= 1 &&
        strlen(trim($_POST["retiro"])) >= 1
    ) {
        $estado = trim($_POST["estado"]);
        $reposicion = trim($_POST["reposicion"]);
        $pedidos = trim($_POST["pedidos"]);
        $pallet = trim($_POST["pallet"]);
        $retiro = trim($_POST["retiro"]);
        $fecha = date("Y/m/d");
        $consulta = "INSERT INTO datos(estado,reposicion,pedidos,pallet,retiro,fecha)
        VALUES('$estado','$reposicion','$pedidos','$pallet','$retiro','$fecha')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            // Si la consulta fue exitosa
            echo "<h3 class='success'>Tu registro se hizo correctamente</h3>";
        } else {
            // Si la consulta falló
            echo "<h3 class='error'>Tu registro ha fallado: " . mysqli_error($conex) . "</h3>";
        }
    } else {
        // Si no se han completado todos los campos
        echo "<h3 class='error'>Llena todos los campos correctamente.</h3>";
    }
}
?>