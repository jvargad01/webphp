<?php
    require_once("datapgsql.php");
 
    function  openconection() {
       $connect = pg_connect("host=".HOST." port=".PORT." dbname=".DB." user=".USER." password=".PASS."") or die('No se ha podido conectar: ' . pg_last_error());
    
        if(!$connect)
           return null; 
        else
          return $connect; 
    }
    
    function closeConnection($connect){
        pg_close($connect);
    }
    
?>