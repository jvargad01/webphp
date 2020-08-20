<?php
 
 require_once("dataMysql.php");
     
  function  openconection() {
    $conex = mysqli_connect(HOST.":".PUERTO, USUARIO, CONTRASENA, BD);  
    if (!$conex) {
      return null; 
    } 
    return $conex;   
  }    

  function closeConection($conex){
    mysqli_close($conex);
  }
 
?> 