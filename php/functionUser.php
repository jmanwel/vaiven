<?php

    include_once 'conexionDB.php';

    function registrar( $user, $nombre, $apellido, $email, $password){

        $conexionDB = new conexionDB();
        $sql_connect = $conexionDB->connect();
        $sql_sentencia = "INSERT INTO user (nick_user,name_user,lastname_user,email_user,pass_user,activity_user,rol_id) value ('$user','$nombre','$apellido','$email','$password','0','2')";
        $sql_resultado = mysqli_query($sql_connect, $sql_sentencia);

        mysqli_close($sql_connect);
        header("Location: ../mensaje.php");
        exit();


    }

    function login( $nick, $password){

        $conexionDB = new conexionDB();
        $sql_connect = $conexionDB->connect();
        $sql_sentencia = "SELECT * FROM user where (nick_user) = ('$nick')";
        $sql_resultado = mysqli_query($sql_connect, $sql_sentencia);
        $sql_array = mysqli_fetch_assoc($sql_resultado);
        $error = 'Error de conexion';
        
        if($sql_array['pass_user'] == $password){

            session_start();
            $_SESSION['user'] =  $sql_array['nick_user'];
            $_SESSION['rol'] = $sql_array['rol_user'];
            header("Location: ../index.php");
            exit();

        }else{

            session_start();
            $_SESSION['error'] = $error;
            header("Location: ../signIn.php");
            exit();

        }

        mysqli_close($sql_connect);

    }

?>