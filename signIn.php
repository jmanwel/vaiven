<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Venta de accesorios para dispositivos moviles, Sign In">
		<meta name="author" content="DD Accesorios">
		<link rel="icon" href="image/ico.png">
		<link href="css/bootstrap.css" rel="stylesheet">
     	<link href="css/mycss.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/myjs.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        
        <title>Sign In - Vaiven</title>

	</head>

    <body>
        <main role="main">
            <div class="container text-center py-5">
                <div class="py-2">
                    <img class="img-fluid mb-4" src="image/logo.png" alt="Logo" height="250px" width="250px">
                    <p class="lead">Por favor ingrese</p>
                </div>
                <div class="py-5">    
                    <form method="POST" action="php/login.php" enctype="multipart/form-data">
                        <label for="username" class="sr-only">Email</label>
                        <input type="text" name="iniuser" id="username" class="form-control" placeholder="Email / Usuario" required autofocus>
                        <br>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" name="inipass" id="inputPassword" class="form-control" placeholder="Password" required>
                        <br>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-secondary btn-block" type="submit">Sign in</button>
                        <p class="py-4">¿No tenes cuenta? <a href="signUp.html">Click Aquí</a></p>
                        <p class="mt-5 mb-3 text-muted">&copy; 2019 - NLS</p>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>