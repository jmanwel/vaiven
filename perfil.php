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

                <h1 class="py-5 text-center">PERFIL</h1>

                <div class="row">
                    
                    <div class="col-md-3">
                        <div class="col-md-12" align="center">
                            <img class="img-responsive img-portfolio img-hover" src="img/profile.jpg">
                        </div>
                        <div class="col-md-12">
                            <p class="text-center"><strong>Nombre Apellido</strong></p>
                            <p class="text-center"><em>Título del perfil de usuario</em></p>
                        </div>

                        <div class="col-md-12 text-center">
                        
                            <br>
                            <ul class="list-group list-primary">
                                <a href="#" class="list-group-item">Mi perfil</a>
                                <a href="#" class="list-group-item">Fotografia</a>
                                <a href="#" class="list-group-item">Eliminar cuenta</a>
                                <div class="col-md-2 col-md-offset-2 py-2">
                                    <div class="col-md-5 col-md-offset-3">
                                        <div class="form-group">
                                            <button type="button" id="btnClean" class="btn btn-warning">Limpiar</button>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" id="btnEnviar" class="btn btn-primary">Actualizar</button>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" id="btnCancel" class="btn btn-danger">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    
                    </div>
                    
                    <div class="col-md-9">
                       
                        <form name="modifyProfile" id="profileForm" novalidate>
                        
                            <div class="col-md-12">
                                <div class="col-md-8 col-md-offset-2">
                                    
                                        <div class="control-group form-group text-center">
                                            <div class="controls">
                                                <br >
                                                <label>Información básica</label>
                                                <span id="alertName" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                                    <input type="text" class="form-control" id="txtName" placeholder="Introduzca su nombre" required data-validation-required-message="Por favor introduzca su nomnbre.">
                                                </span>
                                                <br >
                                                <span id="alertSurname" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                                    <input type="text" class="form-control" id="txtSurname" placeholder="Introduzca sus apellidos" required data-validation-required-message="Por favor introduzca sus apellidos.">
                                                </span>
                                                <br >
                                                <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                                    <input type="text" class="form-control" id="txtQualification" placeholder="Introduzca su título" required data-validation-required-message="Por favor introduzca su título.">
                                                </span>
                                                <br >
                                                <span id="alertEmail" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                                    <input type="email" class="form-control" id="txtEmail" placeholder="Introduzca su email" required data-validation-required-message="Por favor introduzca su email.">
                                                </span>
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="control-group form-group">
                                            <div class="controls">
                                                <label>Biografía:</label>
                                                <span id="alertBiography" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
                                                    <textarea rows="6" cols="30" class="form-control" id="txtBiography" required maxlength="999" style="resize:none" 
                                                    data-validation-required-message="Por favor introduzca su biografía deseada."></textarea>
                                                </span>
                                                <br >
                                                <span id="alertSelectLanguage" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
                                                    <select class="form-control" id="selectLanguage" title="Seleccione su idioma">
                                                        <option class="bs-title-option" value="" disabled selected>Elija un idioma</option>
                                                        <option>Alemán</option>
                                                        <option>Castellano</option>
                                                        <option>Catalán</option>
                                                        <option>Francés</option>
                                                        <option>Inglés</option>
                                                        <option>Portugués</option>
                                                    </select>
                                                </span>
                                                <br >
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-12 container allFormButtons">
                                    <br >
                                </div>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </main>

        <?php include_once 'html/footer.html';?>
        
    </body>
</html>