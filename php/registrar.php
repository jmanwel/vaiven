<?php

    include_once 'functionUser.php';

    registrar( $_POST['reguser'], $_POST['regnombre'], $_POST['regapellido'], $_POST['regemail'], sha1($_POST['regpass']));

?>