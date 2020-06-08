<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Listar Libros</title>
    <meta name="keywords" content="Mi Agenda Telefonica" />
    <link rel="stylesheet" type="text/css" href="../../css/listar.css">
</head>
<body>
    <header >
        <div id="encabezado">  
            <div id="logo1">
                <img src="../../imagenes/log.png"  width="250" height="150" alt="Imagen de Portada" >
            </div>
            <div id="buscar">
                <form method="get" action="https://www.google.com/search">
                <input title="busqueda" name="q" type="text" class="floatright" id="cajabusqueda" value="" size="31" 
                 maxlength="255">
                <input name="botonbusq" type="submit" class="floatright" id="botonbusqueda" value="Buscar">
                </form> 	
            </div>  
            <div id="info">
                <a href="tel:+5930998801982"><img src="../../imagenes/contacto.png"  width="50" height="50" alt="Correo electronico" ></a>
                <a href="mailto:dtixi@est.ups.edu.ec"><img src="../../imagenes/sobre.jpg"  width="50" height="50" alt="Contactos Telefonico" ></a>
                <button><a href="index.html" >Regresar</a></button>
            </div>
        </div>  
    </header>
    <nav>
            <ul class="menu_h">
                <li><a href="crearL.php" >Crear Libros</a></li>
                <li><a href="modificarU.php" >Modificar Usuarios</a></li>
                
            </ul>
    </nav>

    <table style="width:100%">
    <tr>
    <th>Nombre Libro</th>
    <th>ISBM Libro</th>
    <th>Numero Paginas</th>
    <th>Numero Capitulo</th>
    <th>Titulo del Capitulo</th>
    <th>Autor</th>
    <th>Nacionalidad Autor</th>
    </tr>
    <?php
   
    include '../../config/conexionBD.php';
    $sql = "SELECT *
    FROM libro ,capitulo, autor
    Where libro.lib_codigo= capitulo.lib_codigo_cp and  autor.aut_codigo= capitulo.aut_codigo_cp ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo " <td>" . $row["lib_nombre"] . "</td>";
        echo " <td>" . $row['lib_ISBM'] ."</td>";
        echo " <td>" . $row['lib_numerop'] . "</td>";
        echo " <td>" . $row["cap_numero"] . "</td>";
        echo " <td>" . $row['cap_titulo'] ."</td>";
        echo " <td>" . $row['aut_nombre'] . "</td>";
        echo " <td>" . $row["aut_nacionalidad"] . "</td>";
        echo "</tr>";
        }
    } else {

        echo "<tr>";
        echo " <td colspan='3'> No existen libros registradas en el sistema </td>";
        echo "</tr>";
        }

        $conn->close();
    ?>
    </table>
</body>
</html>