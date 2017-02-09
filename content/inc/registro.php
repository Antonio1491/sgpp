<?php

$numDonador=$_POST["numDonador"];
$tipoDonante=$_POST["tipoDonante"];
$fecha=$_POST["fecha"];
$nombre=$_POST["nombre"];
$direccion=$_POST["direccion"];
$colonia=$_POST["colonia"];
$cp=$_POST["cp"];
$localidad=$_POST["localidad"];
$tel=$_POST["tel"];
$cel=$_POST["cel"];
$otro=$_POST["otro"];
$estadoCivil=$_POST["estadoCivil"];
$fNacimiento=$_POST["fNacimiento"];
$email=$_POST["email"];

$monto=$_POST["monto"];
$letras=$_POST["letras"];
$periocidad=$_POST["periocidad"];
$vigencia=$_POST["vigencia"];
$indefinido=$_POST["indefinido"];
$tipoDonativo=$_POST["tipoDonativo"];
$fechaCargo=$_POST["fechaCargo"];

$titular=$_POST["titular"];
$numTarjeta=$_POST["numTarjeta"];
$banco=$_POST["banco"];
$vigenciaTarjeta=$_POST["vigenciaTarjeta"];
$tarjetaDe=$_POST["tarjetaDe"];
$tarjetaTipo=$_POST["tarjetaTipo"];
$diaCargo=$_POST["diaCargo"];

$fechaCaptura=date("Y-m-d");

$conexion=mysqli_connect("localhost","root","","sgpp");
mysqli_set_charset($conexion,"utf8");
if(!$conexion){
  die ("Error en la conexión a la Base de Datos");
}
else{
  $sql="INSERT INTO donador(num_donador,
    tipo, fecha, nombre, direccion, colonia, cp,
    localidad, tel, celular, otro, estado_civil,
    nacimiento, email,fecha_captura)
    VALUES ('$numDonante','$tipoDonante','$fecha','$nombre',
      '$direccion', '$colonia', '$cp', '$localidad', '$tel', '$cel', '$otro',
      '$estadoCivil', '$fNacimiento', '$email', '$fechaCaptura')";

  $sql2="INSERT INTO donativo (monto, letras, periocidad,
      vigencia, indefinido, tipo_donativo, fecha_cargo) VALUES
      ('$monto', '$letras', '$periocidad', '$vigencia', '$indefinido',
      '$tipoDonativo', '$fechaCargo')";

  $sql3="INSERT INTO tarjetas (titular, num_tarjeta, banco,
      vencimiento, tarjeta_de, tipo, dia_cargo) VALUES
      ('$titular', '$numTarjeta', '$banco', '$vigenciaTarjeta', '$tarjetaDe',
      '$tarjetaTipo', '$diaCargo')";


  mysqli_query($conexion, $sql);
  mysqli_query($conexion, $sql2);
  mysqli_query($conexion, $sql3);

  echo"<script language='JavaScript'>
          alert('Hemos registrado Correctamente');
      </script>";
  echo "<script>window.history.back();</script>";
}

 ?>
