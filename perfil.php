<?php include_once 'php/sessionCheck.php';?>

<!DOCTYPE html>
<html lang="es">
    

    <?php include_once 'html/head.html';?>

    <!--

        Fuente: 
            - Títulos: Belgium regular
        Color: 
            - Marco foto: c9c9c9
        Tamaños: 
            - Foto Noticia: 250 (alto) x 200 (ancho)
            - Foto Catalogo: 1000 x 1000 (mínimo)
            
    -->

	<body>

        <?php include_once 'html/header.php';?>
        
        <main role="main">
            <div class="container py-5">

                <div class="row">
                    
                    <div class="col-md-3">
                        <div class="col-md-12 py-4" align="center">
                            <img class="img-responsive img-portfolio img-hover" src="image/Thumbnail.png">
                        </div>
                        <div class="col-md-12">
                            <p class="text-center"><strong><?php echo $_SESSION['user']?></strong></p>
                            <p class="text-center"><em>Título del perfil de usuario</em></p>
                        </div>

                        <div class="col-md-12 text-center">
                            <br>
                            <ul class="list-group list-primary">
                                <a href="perfil.php?var=MOPE" class="list-group-item list-group-item-action list-group-item-warning">Modificar perfil</a>
                                <a href="perfil.php?var=MOPA" class="list-group-item list-group-item-action list-group-item-warning">Modificar password</a>
                                <a href="perfil.php?var=MOAV" class="list-group-item list-group-item-action list-group-item-warning">Modificar avatar</a>
                                <a href="perfil.php?var=EC" class="list-group-item list-group-item-action list-group-item-danger">Eliminar cuenta</a>
                            </ul>
                        </div>

                        <div class="col-md-12 text-center">
                            <br>
                            <ul class="list-group list-primary">
                                <a href="#" class="list-group-item list-group-item-action list-group-item-success">Publicar</a>
                            </ul>
                        </div>

                        <div class="col-md-12 text-center">
                            <br>
                            <ul class="list-group list-secondary">
                                <a href="#" class="list-group-item list-group-item-action">Compras</a>
                                <a href="#" class="list-group-item list-group-item-action">Ventas</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Publicaciones</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-info">Calificaciones</a>
                            </ul>
                        </div>


                    
                    </div>
                    
                    <div class="col-md-9 text-center py-4">
                        
                    <?php 
                    
                        if(isset($_GET["var"])){
                            switch($_GET["var"]){
                                case ('MOPE'):
                                    include_once 'html/modify_datos.html';
                                    break;
                                case ('MOPA'):
                                    include_once 'html/modify_pass.html';
                                    break;
                                case ('MOAV'):
                                    include_once 'html/.html';
                                    break;
                                case ('EC'):
                                    include_once 'html/delete_cuenta.html';
                                    break;
                                default:
                                    include_once 'html/datos.html';
                                    break;
                            }
                        }else{
                            include_once 'html/datos.html';
                        }
                    
                    ?>

                    </div>  
                </div>
            </div>
        </main>

        <?php include_once 'html/footer.html';?>
        
    </body>
</html>