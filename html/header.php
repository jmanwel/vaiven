<header>
    <nav class="shadow-sm navbar navbar-expand-lg navbar-light bg-light justify-content-center">
        <button style="margin-bottom: 2rem" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-center" href="index.php">INICIO</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-center" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">CATEGORIAS ♦</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <ul class="list-group list-primary">
                            <a class="dropdown-item list-group-item list-group-item-action" href="">TECNOLOGIA</a>
                            <a class="dropdown-item list-group-item list-group-item-action" href="">DEPORTE</a>
                            <a class="dropdown-item list-group-item list-group-item-action" href="">INDUMENTARIA</a>
                            <a class="dropdown-item list-group-item list-group-item-action" href="">MOBILIARIO</a>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="">RECLAMOS</a>
                </li>
            </ul>
        </div>
        <div>
            <form class="form-inline px-2 mr-md-auto">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="collapse navbar-collapse justify-content-end text-center" id="navbarNavDropdown">
        <?php
                    
            if(!isset($_SESSION['user'])){
				
                echo '<a class="btn btn-primary" href="signIn.php">Sign in</a><svg width="15" height="15"></svg><a class="btn btn-success" href="signUp.php">Sign up</a>';
            }else{
				echo "<h3 class='nav-link text-center'>Bienvenido @" . $_SESSION['user'] . "</h3>";
                echo '<a class="btn btn-info" href="perfil.php">Perfil</a><svg width="15" height="15"></svg><a class="btn btn-danger" href="php/signout.php">Sign out</a>';
            }

        ?>
        </div>
    </nav>
</header>