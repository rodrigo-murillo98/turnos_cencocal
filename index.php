<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CD NOGALES CENCOCAL</title>
    <link rel="stylesheet" href="style.css">
</head>

<H1>CHECK LIST - Entrega de turno de PM a turno Noche</H1>

<body>
    <form method="POST" autocomplete="off">
        <table> <!-- Tabla Fecha-->
            <thead>
                <tr>
                    <th>Fecha</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <?php
                        date_default_timezone_set('America/Santiago');
                        $fechaHoy = date('d-m-Y');
                        echo "$fechaHoy";
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    
        <br>
        <table>  Tabla a revisar 1
            <thead>
                <tr>
                    <th>Item a revisar</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Estado sucursales</td>
                    <td><input type="text" name="estado"></td>
                </tr>
                <tr>
                    <td>Reposición jaula</td>
                    <td><input type="number" name="reposicion" placeholder="%"></td>
                </tr>
                <tr>
                    <td>Pedidos especiales</td>
                    <td><input type="text" name="pedidos"></td>
                </tr>
                <tr>
                    <td># Pallet con mercadería recepción</td>
                    <td><input type="text" name="pallet"></td>
                </tr>
                <tr>
                    <td>Retiro cliente/vendedor/donaciones</td>
                    <td><input type="text" name="retiro"></td>
                </tr>
            </tbody>

        </table>
<br>
        <input type="submit" name="send" class="btn" value="Enviar">
    <!--
        <br>
        <table>  Tabla a revisar 2
            <thead>
                <tr>
                    <th> Item a revisar</th>
                    <th>Aplica</th>
                    <th>Observación</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Productos Nuevos</td>
                    <td><input type="checkbox"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Novedad camiones en reparto</td>
                    <td><input type="checkbox"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Ubicación mercadería sucursal</td>
                    <td><input type="checkbox"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Rutas preparadas y separadas</td>
                    <td><input type="checkbox"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Gas</td>
                    <td><input type="checkbox"></td>
                    <td><input type="text"></td>
                </tr>
            </tbody>
        </table>

        <br>
        <table>  Tabla Jefes
            <thead>
                <th>Jefe T. Noche</th>
                <th>Validado</th>
            </thead>
            <tbody>
                <td><input type="text"></td>
                <td><input type="checkbox"></td>
            </tbody>
            <thead>
                <th>Jefe T. AM</th>
                <th>Validado</th>
            </thead>
            <tbody>
                <td><input type="text"></td>
                <td><input type="checkbox"></td>
            </tbody>
        </table> -->


        
        <?php
        include "send.php";
        ?>
    </form>
</body>

</html>