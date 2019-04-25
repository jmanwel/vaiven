<?php

    include_once 'functionUser.php';

    login( $_POST['iniuser'], sha1($_POST['inipass']));

?>