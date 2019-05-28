<?php

    include_once 'conexionDB.php';

	
    function publicar( $nombre, $descripcion, $precio, $userID, $stock)
	{
		
		
        $conexionDB = new conexionDB();
        $sql_connect = $conexionDB->connect();
        
		$sql_sentencia = "INSERT INTO articulo (nombre_articulo,descripcion_articulo,precio_articulo ,user_id, stock_articulo) 
										value ('$nombre','$descripcion','$precio','$userID', $stock)";

		$sql_resultado = mysqli_query($sql_connect, $sql_sentencia);

        		
		
		/*
		if($sizeImagen<3000000)
		 {
			 if($tipoImagen=="image/jpg" || $tipoImagen=="image/jpeg" || $tipoImagen=="image/gif" || $tipoImagen=="image/png")
			  {
				 $conexionDB = new conexionDB();
				 $sql_connect = $conexionDB->connect();
				 
				 $carpetaDestino = $_SERVER['DOCUMENT_ROOT'] . '/vaiven/imagenUpload/';		
				 move_uploaded_file($carpetaDestino, $carpetaDestino.$nombreImagen);
				 
				 $archivoObjetivo = fopen($carpetaDestino.$nombreImagen, "r");
				 $contenido = fread($archivoObjetivo, $sizeImagen);
				 $contenido = addslashes($contenido);
				 fclose($archivoObjetivo);
				 
				 
        
				 $sql_sentencia = "INSERT INTO articulo (nombre_articulo,descripcion_articulo,precio_articulo ,user_id, contenido_imagen) 
										value ('$nombre','$descripcion','$precio','$userID', $contenido)";

				 $sql_resultado = mysqli_query($sql_connect, $sql_sentencia);
				 
			  } 
			
		 }else
			  {echo "El tamaño de la imagen supera el máximo permitido";}
		*/
		
			mysqli_close($sql_connect);
			header("Location: ../perfil.php");
			exit();

    }


?>