<?php 
    MF::MenFo();
//var_dump($_FILES);
    $msj = ""; //Esta variable corresponde al mensaje que se muestra cuando se validan los datos.
    $msjFotos = ""; //Esta variable corresponde al mensaje de validacion de las fotos.

    if($_POST){
        
        //Variables
        $email = $_SESSION["user"]->email;
        $titulo = $_POST["tituloAnuncio"];
        $desc = $_POST["descripcionAnuncio"];
        $categoria = $_POST["categoria"];
        $precio = $_POST["precio"];
        
        //SQL
        $CI =& get_instance();
        
        
        //Revisa si existe el folder con el dir "Anuncios/{emailUsuario}/{tituloAnuncio}" e ingresa los datos en el sub-folder con el titulo del anuncio, de lo contrario, crea el folder del usuario, el sub-folder e ingresa los datos. Para no crear el anuncio en la base de datos aun cuando el archivo no se guarda, la sentencia SQL ira dentro de estas validaciones.
        if(file_exists("Anuncios/$email/$titulo")){
            //Pone el mensaje de validacion de si existe
            $msj = "Ya tienes un anuncio con el mismo titulo";
        }
        else{            
            //Se validara primero que no pase de 5 fotos. Si no pasa de 5 fotos entonces crea el anuncio.
            if(count($_FILES["fotos"]["name"]) > 5){
                    $msjFotos = "Tu anuncio tiene mas de 5 fotos, elimina algunas por favor.";
            }
            else{
                    //Crea el folder con el email del usuario y el nombre del anuncio en la direccion especificada arriba
                    mkdir("Anuncios/{$email}/{$titulo}", 0777, true);
                
                    //Contador
                    $i = 0;
                
                    //Insertar valores en la tabla
                    $CI->db->query("insert into anuncios(email, tituloAnuncio, descripcionAnuncio, categoria, precio) values('{$email}', '{$titulo}', '{$desc}', '{$categoria}', {$precio});");
                    
                        foreach($_FILES["fotos"]["name"] as $nombre){
                            //Si la imagen no presenta ningun error, la guarda, de lo contrario muestra mensaje
                            if($_FILES["fotos"]["error"][$i] == 0){
                                $filesTmpName = $_FILES["fotos"]["tmp_name"][$i];
                                $nombreFoto = "foto{$i}";
                                move_uploaded_file($filesTmpName, "Anuncios/$email/$titulo/{$nombreFoto}.jpg");
                                $i++;
                            }
                            else{
                                $msjFotos = "La {$i} foto no pudo guardarse";
                            }
                        }
                
                            //Valida que se introdujeron los datos y le pone mensaje
                            if($this->db->affected_rows() > 0){
                                $msj = "Anuncio creado con exito";
                            }
            }
        }
    }
?>

<div class="container">
    <div class="row">
        <div class="col col-sm-4 col-sm-offset-4">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group input-group">
                    <label class="input-group-addon">Titulo del anuncio: </label>
                        <input required type="text" name="tituloAnuncio" class="form-control" />
                </div>
                
                <div class="form-group input-group">
                    <label class="input-group-addon">Descripcion: </label>
                    <textarea required name="descripcionAnuncio" class="form-control"></textarea>
                </div>
                
                <div class="form-group input-group">
                    <label class="input-group-addon">Precio: </label>
                        <input required type="number" name="precio" class="form-control" />
                </div>
                
                <div class="form-group input-group">
                    <label class="input-group-addon">Categoria</label>
                        <select name="categoria" class="form-control">
                            <option value="Bicicletas">Bicicletas</option>
                            <option value="Accesorios">Accesorios</option>
                            <option value="Herramientas">Herramientas</option>
                        </select>
                </div>
                
                <div class="form-group input-group">
                    <label clas="input-group-addon">Fotos: </label>
                        <input required type="file" name="fotos[]" class="form-control" multiple />
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Subir anuncio</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="text-center">
        <h3><?php echo $msj; echo $msjFotos; ?></h3>
    </div>
</div>