<?php
$conector = new mysqli("localhost", "root", "", "liga");
if ($conector->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;}
    else{
    //Hacemos una consulta
    	$resultado = $conector->query("SELECT * FROM equipo ");
      	}
    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2> jugadores</h2>
<table>
  <tr>
  <td>id</td>;
  <td>equipo</td>;
  <td>ciudad</td>

</tr>

<?php
foreach ($resultado as $equipo) {
  echo"<tr>";
  echo"<td>".$equipo['id_equipo']." "."</td>";
  echo"<td>".$equipo['nombre']."</td>";
  echo "<td>".$equipo['ciudad']."</td>";
  echo"</tr>";
}
?>
</table>
</body>
</html>
