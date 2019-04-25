<?php

require_once 'parDB.php';

class conexionDB
{
    public function __construct()
    {

    }

    public function connect()
    {

        $conexion = mysqli_connect(DBHOST, DBUSER, DBPASS, DB);
        return $conexion;

    }
}
