<?php 
 require_once("mongo.php");

  $mongo= openconnection();
   
  $collection = $mongo->collectiondemo;


  if(empty($_POST['iddemo']) !=true && empty($_POST['casilla']) !=true ){
    $result = $collection->insertOne([
        "iddemo" => $_POST['iddemo'],
        "descripcion" => $_POST['casilla'],
    ]);
    
    header('Location: selectmongo.php');
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
    <form action="insertarmongo.php" method="post">
        <fieldset>
            <legend>Suscribirse al Boletín</legend> 

            <p><label for="casilla">id:</label> 
            <input type="text" name="iddemo" id="iddemo"></p>

            <p><label for="casilla">descripcion:</label> 
            <input type="text" name="casilla" id="casilla"></p>

            <p><input type="submit" value="enviar"></p>
        </fieldset>
    </form>
    </body>
</html>