<?php 
 require_once("mongo.php");

  $mongo= openconnection();
   
  $collection = $mongo->collectiondemo;
 
  if (empty($_GET['id']) !=true){ 
   
     //$collection->remove(array("_id" => new MongoDB\BSON\ObjectId($_GET['id']), false);
     $collection->deleteOne(["_id"=>new MongoDB\BSON\ObjectId($_GET['id'])]);
     
    header('Location: selectmongo.php');
  }
 ?> 