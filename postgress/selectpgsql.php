<?php 
 include_once("postgress.php");

 $conex= openconection();

 $query = "SELECT iddemo, descripcion FROM demo";
 $result = pg_query($conex, $query);
     
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
       <th colspan="2"><a href="insertarpgsql.php">nuevo</a></th>
      <tr>
 
    <?php
 
        while ($row = pg_fetch_array($result)) { 
         
            printf("<tr><td>%s</td>", $row["iddemo"]); 
            printf("<td>%s</td>", $row["descripcion"]); 
            printf("<td><a href='editarpgsql.php?id=%s'>editar</a></td>", $row["iddemo"]); 
            printf("<td><a href='borrarpgsql.php?id=%s'>borrar</a></td></tr>", $row["iddemo"]); 
             
        
        } 
         
        //closeConection($conex);  
    ?>
 
    </table>
</center>

    </body>
</html>