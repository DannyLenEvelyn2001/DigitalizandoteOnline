<?php
/*
  <!-- =======================================================
    Tarjeta Digital: HERSCHEL ESQUIVEL MORALES
    Autor: Ingeniero Victor Manuel Alarcón Hernandez
    Sitio: https://digitalizandote.digital/ (Tarjeta Digital)
  ======================================================= -->
  */

  date_default_timezone_set("Mexico/General");
  $fecha_actual = date('Y-m-d');
  $hora_registro = date("h:i:s");
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $celular = $_POST["celular"];
  $teloficina = $_POST["teloficina"];
  $mailgrax= $_POST["email"];
  $mailresponder=$_POST["email"];
  $mensaje = $_POST["mensaje"];
  $mensaje = strtoupper($mensaje);
  $nombre  = strtoupper($nombre);
/*
if  ($celular<>'')
    {
   
        $link = mysqli_connect("localhost", "u227836044_adminh", "Isi2023#$%&", "u227836044_grupoh") or die("No hay Conexion");
        $result = mysqli_query($link,"insert into prospectos(
                                                             Nombreprospecto,
                                                             emailprospecto,
                                                             Celularprospecto,
                                                             teloficina,
                                                             mensaje,
                                                             fecharegistro,
                                                             horaregistro,
                                                             comocontacto
                                                             ) values (
                                                             '$nombre',
                                                             '$email',
                                                             '$celular',
                                                             '$teloficina',
                                                             '$mensaje',
                                                             '$fecha_actual',
                                                             '$hora_registro',
                                                             'ALGUIEN MANDO UN WHATSAPP DESDE LA PAGINA PRINCIPAL'
                                                             )");
    }
*/

?>




<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <title></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">


    <style type="text/css">
<!--
.Estilo1 {font-size: 24px}
body {
    background-color: #FFFFFF;
}
-->
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
  <body>


<?php

 header("Location: enviodelwhats.php?nombre=$nombre&email=$email&celular=$celular&teloficina=$teloficina&mensaje=$mensaje");


 ?>

</body>
</html>

