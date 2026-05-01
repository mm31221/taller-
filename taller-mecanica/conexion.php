<?php  

   date_default_timezone_set('America/Argentina/Buenos_Aires');

   //conecto a la base de datos

   $mysqli= mysqli_connect("localhost","root","","taller-mecanica");


   if($mysqli){
      $query = "SELECT * FROM marcas";  

      $resultado = mysqli_query($mysqli, $query);
   }
?>