<?php
include "inc/header_common.php";

$conexion=mysqli_connect("localhost","root","","sgpp");
mysqli_set_charset($conexion,"utf8");
if(!$conexion){
  die ("Error en la conexión a la Base de Datos");
}
else{
$sql="SELECT  a.donador_id, a.num_donador, a.nombre, a.tel, a.celular, a.email, b.monto,
      a.fecha, b.vigencia, c.tarjeta_de
      FROM donador AS a
      LEFT JOIN donativo AS b
      ON b.donativo_id= a.donador_id
      LEFT JOIN tarjetas AS c
      ON c.tarjeta_id = a.donador_id
      LIMIT 0 , 30";
$resultado=mysqli_query($conexion, $sql);

echo "<br><table class='striped responsive-table'>
    <thead>
      <th>Núm. Donador</th>
      <th>Nombre</th>
      <th>Teléfono</th>
      <th>Celular</th>
      <th>E-mail</th>
      <th>Donativo ($)</th>
      <th>Fecha Registro</th>
      <th>Vigencia</th>
      <th>Tarjeta</th>
      <th></th>
    </thead>
      ";

while($fila=mysqli_fetch_row($resultado)){
  echo "<tr>
  <td>".$fila[1]."</td>
  <td>".$fila[2]."</td>
  <td>".$fila[3]."</td>
  <td>".$fila[4]."</td>
  <td>".$fila[5]."</td>
  <td>".$fila[6]."</td>
  <td>".$fila[7]."</td>
  <td>".$fila[8]."</td>
  <td>".$fila[9]."</td>
  <td><a href='ver-mas.php?folio=".$fila[0]."' id='vermas'>Ver más</a></td>
  </tr>";
  }
echo "</table>";
}
?>
  </body>
</html>
