<?php
    $host="192.168.0.15";
    $port="5432";
    $user="cliente";
    $pass="cliente1";
    $dbname="demos";

    echo "<p><i>inicia la conexion a postgress</i></p>";

    
    $connect = pg_connect("host=$host, port=$port, user=$user, 
    pass=$pass, dbname=$dbname")
    or die('No se ha podido conectar: ' . pg_last_error());
  
    if(!$connect)
        echo "<p><i>No me conecte</i></p>";
    else
        echo "<p><i>Me conecte</i></p>";



    pg_close($connect);
?>