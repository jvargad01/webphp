<?php 
 include_once("mysql.php");
  
 $conex= openconection();
 $query = "SELECT iddemo, descripcion FROM demos";
 $result = mysqli_query($conex, $query);
 
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
       <th colspan="2"><a href="insertarmysql.php">nuevo</a></th>
      <tr>
 
    <?php
 
        while($row = mysqli_fetch_array($result))
        { 
        
            printf("<tr> <td>%s</td> <td>%s</td> <td><a href='editarmysql.php?id=%s'>editar</a></td> <td><a href='borrarmysql.php?id=%s'>borrar</a></td> </tr>", $row["iddemo"], $row["descripcion"], $row["iddemo"], $row["iddemo"]); 
        
        } 
        
        mysqli_free_result($result); 
        
        closeConection($conex);  
    ?>
 
    </table>
</center>

    </body>
</html>