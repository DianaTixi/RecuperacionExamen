<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Libro</title>
</head>
<body>
    <?php

    //incluir conexión a la base de datos
    include '../../config/conexionBD.php';
    $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : null;
    $isbm = isset($_POST["isbm"]) ? trim($_POST["isbm"]) : null;
    $numP= isset($_POST["pag"]) ? trim($_POST["pag"]) : null;
    $numeroC = isset($_POST["numeroC"]) ? trim($_POST["numeroC"]) : null;
    $titulo = isset($_POST["titulo"]) ? trim($_POST["titulo"]) : null;
    $autor = isset($_POST["autor"]) ? trim($_POST["autor"]) : null;
    
    //Ingresar los campos la base de datos 
    $sql = "INSERT INTO libro VALUES (0,  '$nombre', '$isbm', '$numP')";
    $conn->query($sql);

    $sqlLib = "SELECT lib_codigo FROM libro WHERE lib_nombre='$nombre'";
    $resultLib = $conn->query($sqlLib);
    //Insertamos el vehiculo
    while($rowLib = $resultLib->fetch_assoc()){
    $codLib =$rowLib["lib_codigo"];
    $sqlCap = "INSERT INTO capitulo VALUES (0, '$numeroC','$titulo','$codLib', '$autor' )";
    $resultCap = $conn->query($sqlCap);
    }
    header("location:listar2.php");
    $conn->close();
    ?>
    
</body>
</html>