<?php
include_once("postgress.php");
  
$conex = openconection();
 
if(empty($_POST['id']) !=true && empty($_POST['casilla']) !=true ){
    $query2 = "INSERT INTO demo (iddemo, descripcion) VALUES ('".$_POST['id']."','".$_POST['casilla']."') ";
     pg_query($conex, $query2);
       echo "OK";  
         header('Location: selectpgsql.php');
    
}

$query = "SELECT max(iddemo)+1 as iddemo FROM demo";
$result = pg_query($conex, $query);
$iddemos = 1;
 
$rs = pg_fetch_assoc($result);

if ($rs) { 
    $iddemos = $rs["iddemo"];   
}

 //closeConection($conex); 
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
    <form action="insertarpgsql.php" method="post">
        <fieldset>
            <legend>Suscribirse al Boletín</legend>
        
            <p><label for="casilla">id:</label> 
            <input type="text" name="id" id="id" value="<?php echo $iddemos;?>"></p>

            <p><label for="casilla">descripcion:</label> 
            <input type="text" name="casilla" id="casilla"></p>

            <p><input type="submit" value="enviar"></p>
        </fieldset>
    </form>
    </body>
</html>