<header>
    <nav class="shadow-sm navbar navbar-expand-lg navbar-light bg-light justify-content-center">
        <button style="margin-bottom: 2rem" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-center" href="index.php">INICIO</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-center" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">CATEGORIAS ♦</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">TECNOLOGIA</a>
                            <a class="dropdown-item" href="">DEPORTE</a>
                            <a class="dropdown-item" href="">INDUMENTARIA</a>
                            <a class="dropdown-item" href="">MOBILIARIO</a>
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
        
        <?php
                    
            if(!isset($_SESSION['user'])){
                echo '<div><a class="btn btn-secondary" href="signUp.php">Sign up</a> <a class="btn btn-secondary" href="signIn.php">Sign in</a></div>';
            }else{
                echo '<div><a class="btn btn-secondary" href="perfil.php">Perfil</a> <a class="btn btn-secondary" href="php/signout.php">Sign out</a></div>';
            }

        ?>

    </nav>
</header>