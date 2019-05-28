<?php

    include_once 'functionPublicar.php';
	
	session_start();
	
    publicar( $_POST['pubNombre'], $_POST['pubDesc'], $_POST['pubPrecio'], $_SESSION['id'], $_POST['pubStock']);

?>