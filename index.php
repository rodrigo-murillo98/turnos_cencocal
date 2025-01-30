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
        <table> <!-- Tabla Asistencia-->
            <thead>
                <th>Asistencia</th>
                <th>Inasistencia</th>
            </thead>
            <tbody>
                <td><input type="number"></td>
                <td><select name="options" id="options" class="lista">
                        <option value="Julio Collao">Julio Collao</option>
                        <option value="Lissette Arancibia">Lissette Arancibia</option>
                        <option value="Arturo Vega">Arturo Vega</option>
                        <option value="Guillermo Bustos">Guillermo Bustos</option>
                        <option value="Rodrigo Murillo">Rodrigo Murillo</option>
                </td>
                </select>


            </tbody>
        </table>
        <br>
        <table> <!-- Tabla SUCURSALES-->
            <thead>
                <th>Sucursales</th>
                <th>Tot. Kilos</th>
                <th>Dia Despacho</th>
                <th>Avance</th>
                <th>Cant Vuelta</th>
            </thead>
            <tbody>
                <tr>
                    <td>Valparaiso</td>
                    <td><input type="number" name="kg"></td>
                    <td><select name="days" id="options" class="lista">
                            <option value="Monday">Lunes</option>
                            <option value="Tuesday">Martes</option>
                            <option value="Wednesday">Miercoles</option>
                            <option value="Thursday">Jueves</option>
                            <option value="Friday">Viernes</option>
                    <td><input type="number" name="advance" placeholder="%"></td>
                    <td><input type="text" name="turns"></td>
                </tr>
                <tr>
                    <td>V.Alemana</td>
                    <td><input type="number" name="kg"></td>
                    <td><select name="days" id="options" class="lista">
                            <option value="Monday">Lunes</option>
                            <option value="Tuesday">Martes</option>
                            <option value="Wednesday">Miercoles</option>
                            <option value="Thursday">Jueves</option>
                            <option value="Friday">Viernes</option>
                    <td><input type="number" name="advance" placeholder="%"></td>
                    <td><input type="text" name="turns"></td>
                </tr>
                <tr>
                    <td>Prat</td>
                    <td><input type="number" name="kg"></td>
                    <td><select name="days" id="options" class="lista">
                            <option value="Monday">Lunes</option>
                            <option value="Tuesday">Martes</option>
                            <option value="Wednesday">Miercoles</option>
                            <option value="Thursday">Jueves</option>
                            <option value="Friday">Viernes</option>
                    <td><input type="number" name="advance" placeholder="%"></td>
                    <td><input type="text" name="turns"></td>
                </tr>
                <tr>
                    <td>Illapel</td>
                    <td><input type="number" name="kg"></td>
                    <td><select name="days" id="options" class="lista">
                            <option value="Monday">Lunes</option>
                            <option value="Tuesday">Martes</option>
                            <option value="Wednesday">Miercoles</option>
                            <option value="Thursday">Jueves</option>
                            <option value="Friday">Viernes</option>
                    <td><input type="number" name="advance" placeholder="%"></td>
                    <td><input type="text" name="turns"></td>
                </tr>
                <tr>
                    <td>Coquimbo</td>
                    <td><input type="number" name="kg"></td>
                    <td><select name="days" id="options" class="lista">
                            <option value="Monday">Lunes</option>
                            <option value="Tuesday">Martes</option>
                            <option value="Wednesday">Miercoles</option>
                            <option value="Thursday">Jueves</option>
                            <option value="Friday">Viernes</option>
                    <td><input type="number" name="advance" placeholder="%"></td>
                    <td><input type="text" name="turns"></td>
                </tr>
                <tr>
                    <td>Copiapo</td>
                    <td><input type="number" name="kg"></td>
                    <td><select name="days" id="options" class="lista">
                            <option value="Monday">Lunes</option>
                            <option value="Tuesday">Martes</option>
                            <option value="Wednesday">Miercoles</option>
                            <option value="Thursday">Jueves</option>
                            <option value="Friday">Viernes</option>
                    <td><input type="number" name="advance" placeholder="%"></td>
                    <td><input type="text" name="turns"></td>
                </tr>
                <tr>
                    <td>Femacal</td>
                    <td><input type="number" name="kg"></td>
                    <td><select name="days" id="options" class="lista">
                            <option value="Monday">Lunes</option>
                            <option value="Tuesday">Martes</option>
                            <option value="Wednesday">Miercoles</option>
                            <option value="Thursday">Jueves</option>
                            <option value="Friday">Viernes</option>
                    <td><input type="number" name="advance" placeholder="%"></td>
                    <td><input type="text" name="turns"></td>
                </tr>
            </tbody>
        </table>
        <br>
        <table> <!-- Tabla DEVOLUCIONES-->
            <thead>
                <th>Devolucion</th>
            </thead>
            <tbody>
                <tr>
                    <td>Pallet con mercaderia devolucion</td>
                    <td><input type="number"></td>
                </tr>
            </tbody>
        </table>
        <br>
        <table> <!-- Tabla BODEGA -->
            <thead>
                <tr>
                    <th>Bodega</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Reposicion Jaula</td>
                    <td><input type="number" name="replace1" placeholder="%"></td>
                </tr>
                <tr>
                    <td>Reposición picking</td>
                    <td><input type="number" name="replace2" placeholder="%"></td>
                </tr>
                <tr>
                    <td>Orden y limpieza</td>
                    <td><input type="number" name="order" placeholder="%"></td>
                </tr>
            </tbody>
        </table>
        <br>
        <table> <!-- Tabla PEDIDOS EXTRA-->
            <thead>
                <tr>
                    <th>Pedidos extras</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Retiro cliente</td>
                    <td><input type="number" name="reposicion"></td>
                </tr>
                <tr>
                    <td>Retiro vendedor</td>
                    <td><input type="number" name="reposicion"></td>
                </tr>
                <tr>
                    <td>Donaciones</td>
                    <td><input type="number" name="reposicion"></td>
                </tr>
                <tr>
                    <td>Pedidos especiales</td>
                    <td><input type="number" name="reposicion"></td>
                </tr>
            </tbody>

        </table>
        <br>
        <table> <!-- Tabla EJEMPLO -->
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

        <br>
        <table> <!-- Tabla EXTRAS BODEGA -->
            <thead>
                <tr>
                    <th>Extras bodega</th>
                    <th>Aplica</th>
                    <th>Observación</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Ubicacion mercaderia sucursal</td>
                    <td><input type="checkbox"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Rutas preparadas y separadas</td>
                    <td><input type="checkbox"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Productos nuevos</td>
                    <td><input type="checkbox"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Gas</td>
                    <td><input type="checkbox"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Agua/Bidon</td>
                    <td><input type="checkbox"></td>
                    <td><input type="text"></td>
                </tr>
            </tbody>
        </table>

        <br>
        <table> <!-- Tabla Jefes -->
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
        </table>



        <?php
        include "send.php";
        ?>
    </form>
</body>

</html>