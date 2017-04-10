<?php 
    MF::MenFo();

        //Variables
        $nombre = $_SESSION["user"]->nombre;

            if($_POST){
                //SQL
                $CI =& get_instance();
                
                //Variables
                $newContra = md5($_POST["contrasena"]);
                $newName = $_POST["nombre"];
                
                $CI->db->query("UPDATE `usuarios` SET `nombre`= '{$newName}', `contrasena`= '{$newContra}' WHERE id = {$_SESSION["user"]->id}");
                $_SESSION["user"]->nombre = $_POST["nombre"];
            }
?>
<div class="container">
    <h3>Bienvenido al administrador de tu cuenta, <?php echo $nombre ?></h3>
    <hr>
    <div class="row">
        <div class="col col-sm-4 col-sm-offset-4">
            <form method="post" action="">
                <div class="form-group input-group">
                    <label class="input-group-addon">Nombre de usuario</label>
                    <input type="text" name="nombre" class="form-control" />
                </div>

                <div class="form-group input-group">
                    <label class="input-group-addon">Contrase&ntilde;a</label>
                    <input type="password" name="contrasena" class="form-control" />
                </div>

                <div class="form-group input-group">
                    <button type="submit" class="btn btn-warning">Actualizar datos</button>
                </div>
            </form>
        </div>
    </div>
</div>
