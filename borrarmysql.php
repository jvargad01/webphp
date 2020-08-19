<?php

include_once("mysql.php");
  
$conex= openconection();

if ( $_GET['id'] != null){
    $query2 = "DELETE FROM demos WHERE iddemo = '".$_GET['id']."'"; 
    if ($conex -> query($query2) === TRUE) {
        echo "OK";
        header('Location: selectmysql.php');
    } 
}

?>