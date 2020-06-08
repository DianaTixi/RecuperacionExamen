<?php
 //incluir conexión a la base de datos
 include "../../config/conexionBD.php";
 $cedula = $_GET['cedula'];
 //echo "Hola " . $cedula;

 $sql = "SELECT * FROM autor, capitulo, libro WHERE aut_nombre='$cedula' or lib_nombre='$cedula' and lib_codigo= lib_codigo_cp and aut_codigo= aut_codigo_cp";
//cambiar la consulta para puede buscar por ocurrencias de letras
 $result = $conn->query($sql);
 echo " <table style='width:100%'>
 <tr>
 <th style='color:black'>Libro</th>
 <th style='color:black'>ISBM</th>
 <th style='color:black'>NumeroPaginas</th>
 <th style='color:black'> Numero Capitulo</th>
 <th style='color:black'>Titulo Capitulo</th>
 <th style='color:black'>Autor</th>
 <th style='color:black'>Nacionalidad</th>

 <th style='color:black'></th>
 <th style='color:black'></th>
 </tr>";
 if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {

 echo "<tr>";
 echo " <td style='color:black' >" . $row['lib_nombre'] . "</td>";
 echo " <td style='color:black' >" . $row['lib_ISBM'] . "</td>";
 echo " <td style='color:black' >" . $row['lib_numerop'] . "</td>";
 echo " <td style='color:black'>" . $row['cap_numero'] ."</td>";
 echo " <td style='color:black' >" . $row['cap_titulo'] . "</td>";
 echo " <td style='color:black' >" . $row['aut_nombre'] . "</td>";
 echo " <td style='color:black'>" . $row['aut_nacionalidad'] ."</td>";

 echo "</tr style='color:black'>";
 }
 } else {
 echo "<tr>";
 echo " <td colspan='2'> No existen usuarios registradas en el sistema </td>";
 echo "</tr>";
 }
 echo "</table>";
 $conn->close(); 