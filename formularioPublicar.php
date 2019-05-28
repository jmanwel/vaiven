<!doctype html>
<html>

	
	 <?php include_once 'html/head.html';
	 
		 include_once 'php/sessionCheck.php';
	 
	 
	 ?>
	 	 
	 	
    <body>
	<?php include_once 'html/header.php';?>
        <main role="main">
            <div class="container text-center py-5">
                <div class="py-2">
                    <img class="img-fluid mb-4" src="image/logo.png" alt="Logo" height="250px" width="250px">
                    <p class="lead">Publicar articulos</p>
                </div>
                <div class="py-5">
                    <form method="POST" action="php/publicar.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="pubNombre" id="nombre" placeholder="Nombre Artículo" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" class="form-control" name="pubDesc" id="descripcion" placeholder="Descripcion Artículo" required>
                            </div>
							
							<div class="col-md-6 mb-3">
                                <label for="descripcion">Precio</label>
                                <input type="text" class="form-control" name="pubPrecio" id="descripcion" placeholder="Precio de Artículo" required>
                            </div>
							
							
							<div class="col-md-6 mb-3">
                                <label for="descripcion">Stock</label>
                                <input type="text" class="form-control" name="pubStock" id="stock" placeholder="Stock de Artículo" required>
                            </div>
														
							<div class="col-md-6 mb-3">
								<label for="imagen">Imagenes</label>               																								
								<input type="file" class="form-control" name="pubImagen" id="imagen">
							</div>		
						</div>
							
                        </div>

                        <div class="mb-3">
                            
                        </div>
                        <button class="btn btn-success btn-lg btn-block" id="publicar" type="submit">Publicar</button>
                        <a href="index.php" class="btn btn-secondary btn-lg btn-block" >Volver a Home</a>
                        <p class="mt-5 mb-3 text-muted">&copy; 2019 - NLS</p>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>