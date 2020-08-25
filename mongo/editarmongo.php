<?php 
 require_once("mongo.php");

  $mongo= openconnection();
 
   
  $collection = $mongo->collectiondemo;

  if (empty($_GET['id']) !=true){
    // Coge todos los documentos de la colección
    $result = $collection->find(['_id' => new MongoDB\BSON\ObjectId($_GET['id']) ]);
    
    foreach ($result as $row) {  
        $id =  $row["_id"]; 
        $iddemos = $row["iddemo"]; 
        $descripcion = $row["descripcion"];  
    } 

  }
   
  if(empty($_POST['iddemo']) !=true && empty($_POST['casilla']) !=true ){
    $result = $collection->updateOne(
        ["_id" => new MongoDB\BSON\ObjectId($_POST['id'])],
        [
            '$set' => [
                "iddemo" => $_POST['iddemo'],
                "descripcion" => $_POST['casilla'],
            ],
        ]
    );  
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
    <form action="editarmongo.php" method="post">
        <fieldset>
            <legend>Suscribirse al Boletín</legend>
            <input type="hidden" name="id" id="id" disable value="<?php echo $id;?>">
            <p><label for="casilla">id:</label> 
            <input type="text" name="iddemo" id="iddemo" disable value="<?php echo $iddemos;?>"></p>

            <p><label for="casilla">descripcion:</label> 
            <input type="text" name="casilla" id="casilla" value="<?php echo $descripcion;?>"></p>

            <p><input type="submit" value="enviar"></p>
        </fieldset>
    </form>
    </body>
</html>