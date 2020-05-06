<?php
try {
	//Creamos la conexión PDO 
	$cnn = new PDO("mysql:host=localhost;dbname=lista_tareas","root","");

	//Preparamos la consulta sql
	$respuesta = $cnn->prepare("select * from categorias");
    //sql de tareas
    $respuesta = $cnn->prepare("select * from categorias");

	//Ejecutamos la consulta
    $respuesta->execute();
    
	//Creamos un array donde almacenamos lo obtenido
	$categoria = [];

	//Recorremos lo obtenido
	foreach($respuesta as $res){
		//Llenamos el array
	    $categoria[]=$res;
	}

	//Hacemos una impresion del array en forma JSON.
	echo json_encode($categoria);

} catch (Exception $e) {

	echo $e->getMessage();
	
}
?>