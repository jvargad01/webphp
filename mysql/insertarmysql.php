<?php
include_once("mysql.php");
  
$conex= openconection();
 
if(empty($_POST['id']) !=true && empty($_POST['casilla']) !=true ){
    $query2 = "INSERT INTO demos (iddemo, descripcion) VALUES ('".$_POST['id']."','".$_POST['casilla']."') ";
    
    if ($conex -> query($query2) === TRUE) {
        echo "OK"; 
        closeConection($conex); 
        header('Location: selectmysql.php');
    } 
}

$query = "SELECT max(iddemo)+1 as iddemo FROM demos";
$result = mysqli_query($conex, $query);
$iddemos = 1;
if (mysqli_num_rows($result) > 0) { 
  while($row = mysqli_fetch_assoc($result)) {
    $iddemos = $row["iddemo"];
  }
}

closeConection($conex); 
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
    <form action="insertarmysql.php" method="post">
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