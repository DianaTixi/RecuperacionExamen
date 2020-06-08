<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Capitulos</title>
</head>
<body>
    <?php

    //incluir conexión a la base de datos
    include '../../conexionBD.php';
    $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : null;
    $isbm = isset($_POST["isbm"]) ? trim($_POST["isbm"]) : null;
    $numP= isset($_POST["pag"]) ? trim($_POST["pag"]) : null;
    $numeroC = isset($_POST["numeroC"]) ? trim($_POST["numeroC"]) : null;
    $ = isset($_POST["titulo"]) ? trim($_POST["titulo"]) : null;
    $nombre = isset($_POST["autor"]) ? trim($_POST["autor"]) : null;


    //Sacamos el cli_codigo
    $sqlCli = "SELECT cli_codigo FROM clientes WHERE cli_cedula='$cedula'";
    $resultCli = $conn->query($sqlCli);
    
    //Insertamos el vehiculo
    while($rowCli = $resultCli->fetch_assoc()){
        $codcli =$rowCli["cli_codigo"];
        $sqlVeh = "INSERT INTO vehiculos VALUES (0, '$codcli', '$placa', '$marca','$modelo')";
        $resultVeh = $conn->query($sqlVeh);
    }
    //Sacamos el veh_codigo
    $sqlV2 = "SELECT veh_codigo FROM vehiculos WHERE veh_placa='$placa'";
    $resultV2 = $conn->query($sqlV2);

    //Insertamos el ticket
    while($rowV2 = $resultV2->fetch_assoc()){
        $codV2 =$rowV2["veh_codigo"];
        $sqlTic = "INSERT INTO tickets VALUES (0, '$codV2', '$ingreso', '$salida')";
        $resultTic = $conn->query($sqlTic);
    }
    $conn->close();
    ?>
    
</body>
</html>