<?php 
    MF::MenFo();

        //Variables
        $nombre = $_SESSION["user"]->nombre;

        //SQL
        $CI =& get_instance();
        $rs = $CI->db->query("select * from usuarios where id = ?", $_SESSION["user"]->id);
        $rs = $rs->result();

            if($_POST){
                $newContra = md5($_POST["nombre"]);
                $newName = $_POST["contrasena"];
                
                $CI->db->query("update `usuarios` set nombre= '{$newName}' and contrasena = '{$newContra}' where id = {$rs[0]->id}");
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
