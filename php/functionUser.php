<?php

    include_once 'conexionDB.php';

    function registrar( $user, $nombre, $apellido, $email, $password){

        $conexionDB = new conexionDB();
        $sql_connect = $conexionDB->connect();
        $sql_sentencia = "INSERT INTO user (nick_user,name_user,lastname_user,email_user,pass_user,rol_id) value ('$user','$nombre','$apellido','$email','$password','2')";
        $sql_resultado = mysqli_query($sql_connect, $sql_sentencia);

        /*mostrar esto en un html que luego te redireccione a signin*/

        echo 'Se registro correctamente el usuario con los siguientes datos <br>';

        echo '<br/> User: '.$user;
        echo '<br/> Nombre: '.$nombre;
        echo '<br/> Apellido: '.$apellido;
        echo '<br/> Email: '.$email;

        mysqli_close($sql_connect);

    }

    function login( $nick, $password){

        $conexionDB = new conexionDB();
        $sql_connect = $conexionDB->connect();
        $sql_sentencia = "SELECT * FROM user where (nick_user) = ('$nick')";
        $sql_resultado = mysqli_query($sql_connect, $sql_sentencia);
        $sql_array = mysqli_fetch_assoc($sql_resultado);

        if($sql_array['pass_user'] == $password){

            session_start();
            $_SESSION['user'] =  $sql_array['nick_user'];
            header("Location: ../index.php");
            exit();

        }else{

            header("Location: ../signIn.php");
            exit();

        }

        mysqli_close($sql_connect);

    }

?>