<?php 
    if($_POST){
        //Variables
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $contrasena = md5($_POST["contrasena"]);
        
        //SQL
        $CI =& get_instance();
        $CI->db->query("insert into usuarios (nombre, email, contrasena) values('{$nombre}', '{$email}', '{$contrasena}')");
        
        //Valida que se inserto con exito el usuario y lo redirecciona al login
        if($this->db->affected_rows() > 0){
            redirect("home/login");
        }
    }
?>
<html>
<head>
	<title>ATOMBIKE- Registrarse</title>
	
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	
        <style>
            body{
                background: url("<?php echo base_url(''); ?>/res/regfondo.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }

            label{
                color: black;
            }
        </style>
</head>
<body>
    <!--Todo el menu esta desde aqui-->
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand" href="<?php echo base_url('home'); ?>" title="Inicio">ATOMBIKE</a></div>
            <ul class="nav navbar-nav">
                <li><a href="#">Categor&iacute;as</a></li>
                <li><a href="<?php echo base_url('home/about'); ?>">Nosotros</a></li>
            </ul>


            <ul class="nav navbar-right navbar-nav">
                <li><a href="<?php echo base_url('home/login'); ?>"><i class="glyphicon glyphicon-user"></i> Inicia sesi&oacute;n</a></li>
                <li><a href=""><i class="glyphicon glyphicon-log-in"></i> Registrate</a></li>
            </ul>
        </div>
        </nav>
        <!--Hasta aqui-->
    
        <h1 style="width: 100%;"><span class="label label-info"> Reg&iacute;strate con nosotros y descubre nuevas formas de anunciarte</span></h1>
        <div class="container">

            <form method="post" action="">
            <div class="form-group">
                <label class="col col-sm-6"><h2>Nombre: </h2></label>
                    <input type="text" name="nombre" class="form-control input-lg" />
            </div>

            <div class="form-group">
                <label class="col col-sm-6"><h2>Email: </h2></label>
                    <input type="email" name="email" class="form-control input-lg" />
            </div>

            <div class="form-group">
                <label class="col col-sm-6"><h2>Contrase&ntilde;a</h2></label>
                    <input type="password" name="contrasena" class="form-control input-lg" />
            </div>

            <br/>

            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-success" style="width: 100%">Registrarse</button>
            </div>
            </form>
        </div>
    
        <!--Desde aqui esta el footer-->
        <hr>
        <footer class="container-fluid text-center">
            <a href="#">ATOMICITY</a> &reg; - <span id="foottime"></span>
        </footer>
        <!--Hasta aqui-->

        <script>
                //Año actual
                document.getElementById("foottime").innerHTML = new Date().getFullYear();
        </script>
</body>
</html>