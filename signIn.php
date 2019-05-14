<?php session_start();?>

<!DOCTYPE html>
<html lang="es">

    <?php include_once 'html/head.html';?>
    <link href="css/signin.css" rel="stylesheet">

    <body>
        <main role="main">
            <div class="container text-center py-5">
                <div class="py-2">
                    <img class="img-fluid mb-4" src="image/logo.png" alt="Logo" height="250px" width="250px">
                    <p class="lead">Por favor ingrese</p>
                </div>
                <div class="py-4">

                    <?php
                    
                    if(isset($_SESSION['error'])){
                        echo '<p style="color: red; font-size: 1rem">Usuario o contraseña incorrecta</p>';
                        session_destroy();
                        unset($_SESSION['error']);
                    }

                    ?>

                    <form method="POST" action="php/login.php" enctype="multipart/form-data">
                        <label for="username" class="sr-only">Usuario</label>
                        <input type="text" name="iniuser" id="username" class="form-control" placeholder="Usuario" required autofocus>
                        <br>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" name="inipass" id="inputPassword" class="form-control" placeholder="Password" required>
                        <br>
                        <br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        <a href="index.php" class="btn btn-secondary btn-lg btn-block" >Volver a Home</a>
                        <p class="py-4">¿No tenes cuenta? <a href="signUp.php">Click Aquí</a></p>
                        <p class="mt-5 mb-3 text-muted">&copy; 2019 - NLS</p>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>