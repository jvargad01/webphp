<?php 
require_once("datamongo.php"); 
require_once("vendor/autoload.php");

use MongoDB\Client as Mongo;

function openconnection(){ 
     # Crea algo como mongodb://parzibyte:hunter2@127.0.0.1:27017/agenda
     $cadenaConexion = sprintf("mongodb://%s:%s@%s:%s/%s", USER, PASS, HOST, PORT, DB);
     $cliente = new Mongo($cadenaConexion);
     return $cliente->selectDatabase(DB); 
}

?>