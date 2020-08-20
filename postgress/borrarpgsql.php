<?php

include_once("postgress.php");
  
$conex= openconection();

if ( $_GET['id'] != null){
    $query2 = "DELETE FROM demo WHERE iddemo = '".$_GET['id']."'"; 
     pg_query($query2);
        echo "OK";
        
        header('Location: selectpgsql.php');
}        
?>