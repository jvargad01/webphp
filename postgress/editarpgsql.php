<?php
include_once("postgress.php");
  
$conex= openconection();
$iddemos = "";
$descripcion = "";

 
if (empty($_GET['id']) !=true){
  $query = "SELECT iddemo, descripcion FROM demo WHERE iddemo in (".$_GET['id'].")";
   
  $result = pg_query($conex, $query); 
  $row = pg_fetch_assoc($result);
  if ($row) {  
        $iddemos = $row["iddemo"];
        $descripcion = $row["descripcion"]; 
  }
}

if(empty($_POST['id']) !=true && empty($_POST['casilla']) !=true ){
    $query2 = "UPDATE demo SET descripcion = '".$_POST['casilla']."'  WHERE iddemo = '".$_POST['id']."'"; 
     pg_query($query2);
        echo "OK"; 
        header('Location: selectpgsql.php');
     
}

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
    <form action="editarpgsql.php" method="post">
        <fieldset>
            <legend>Suscribirse al Boletín</legend>
        
            <p><label for="casilla">id:</label> 
            <input type="text" name="id" id="id" disable value="<?php echo $iddemos;?>"></p>

            <p><label for="casilla">descripcion:</label> 
            <input type="text" name="casilla" id="casilla" value="<?php echo $descripcion;?>"></p>

            <p><input type="submit" value="enviar"></p>
        </fieldset>
    </form>
    </body>
</html>