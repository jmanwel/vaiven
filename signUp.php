<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Venta de accesorios para dispositivos moviles, Sign Up">
		<meta name="author" content="DD Accesorios">
		<link rel="icon" href="image/ico.png">
		<link href="css/bootstrap.css" rel="stylesheet">
     	<link href="css/mycss.css" rel="stylesheet">
        <link href="css/signup.css" rel="stylesheet">
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/myjs.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        
        <title>Sign Up - Vaiven</title>

	</head>

    <body>
        <header></header>
        <main role="main">
            <div class="container text-center py-5">
                <div class="py-2">
                    <img class="img-fluid mb-4" src="image/logo.png" alt="Logo" height="250px" width="250px">
                    <p class="lead">Complete el siguiente formulario</p>
                </div>
                <div class="py-5">
                    <form method="POST" action="php/registrar.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Nombre</label>
                                <input type="text" class="form-control" name="regnombre" id="firstName" placeholder="Juan" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="lastName">Apellido</label>
                                <input type="text" class="form-control" name="regapellido" id="lastName" placeholder="Perez" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="username">Usuario</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" name="reguser" id="username" placeholder="username" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="regemail" id="email" placeholder="tu@ejemplo.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="regpass" id="password" placeholder="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                        </div>

                        <div class="mb-3">
                            <label for="password">Confirmar Password</label>
                            <input type="password" class="form-control" id="confpassword" placeholder="confirma tu password" required>
                        </div>
                        <div>
                            <br>    
                        </div>    
                        <button class="btn btn-secondary btn-lg btn-block" id="registrar" type="submit">Registrarse</button>
                        <p class="py-4">¿Ya tenes cuenta? <a href="signIn.php">Click Aquí</a></p>
                        <p class="mt-5 mb-3 text-muted">&copy; 2019 - NLS</p>
                    </form>
                </div>
            </div>
        </main>

        <script>

            var password = document.getElementById("password"), confpassword = document.getElementById("confpassword");

            function validatePassword(){
                if(password.value != confpassword.value) {
                    confpassword.setCustomValidity("Los password no coinciden.");
                } else {
                    confpassword.setCustomValidity('');
                }
            }

            password.onchange = validatePassword;
            confpassword.onkeyup = validatePassword;

        </script>

    </body>
</html>
