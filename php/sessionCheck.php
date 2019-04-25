<?PHP
    
    session_start();

    if(!isset($_SESSION['user'])){
        session_destroy();
        header("Location: /prograWeb2/signin.php");
        exit();
    }

?>