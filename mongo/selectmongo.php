<?php 
 require_once("mongo.php");

  $mongo= openconnection();
 
   
  $collection = $mongo->collectiondemo;

  // Coge todos los documentos de la colección
  $result = $collection->find();
 
?>

<html>
	<head>
		<title>Ejercicios prácticos HTML5</title>
		<meta charset="utf-8">
		<meta name="author" content="">
		<meta name="description" content="Ejercicios prácticos HTML5">
		<meta name="generator" content=", Curso práctic HTML5">
		<meta name="keywords" content="Ejercicios, Soluciones, Prácticas, HTML5">
	</head>
	<body>

<center>
<table border="1" >
     
     <tr>
       <th>Id </th>
       <th>descripcion</th>
       <th>entry</th>
       <th colspan="2"><a href="insertarmongo.php">nuevo</a></th>
      <tr>
      <?php    foreach ($result as $row) {  
 
        printf("<tr><td>%s</td>", $row["iddemo"]); 
        printf("<td>%s</td>", $row["descripcion"]); 
        printf("<td><a href='editarmongo.php?id=%s'>editar</a></td>", $row["_id"]); 
        printf("<td><a href='borrarmongo.php?id=%s'>borrar</a></td></tr>", $row["_id"]); 
             
      } ?>
    </table>
</center>

    </body>
</html>