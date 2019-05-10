<?PHP
    
    session_start();

    if(!isset($_SESSION['user'])){
        session_destroy();
        header("Location: /vaiven/index.php");
        exit();
    }

?>