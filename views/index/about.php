<html>
<head>
    <title>ATOMBIKE- Nosotros</title>
    
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
        <!--Styling section, it's personal-->
        <style>
            @media screen and (max-width: 768px) {
                .col-sm-4 {
                    text-align: center;
                    margin: 25px 0;
                }
            }
            
            .jumbotron{
                height: 90%;
                background: url("<?php echo base_url(''); ?>/res/about.jpg");
                background-repeat: no-repeat;
                background-size: 100%;
                color: black;
                text-align: center;
                padding: 100px 25px;
                margin-bottom: auto;
            }
            
            .second{

                padding: 60px 50px;
                background-color: lightgray;
            }
                
            .mundo{
                font-size: 200px;
            }
            
            .let h4{
                font-size: 40px;
            }
            
            .let p{
                font-size: 30px;
            }
        </style>
</head>
<body>
    <!--Todo el menu esta desde aqui-->
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="<?php echo base_url('home'); ?>" title="Inicio">ATOMBIKE</a></div>
        <ul class="nav navbar-nav">
            <li><a href="#">Categor&iacute;a</a></li>
            <li><a href="<?php echo base_url('home/about'); ?>">Nosotros</a></li>
        </ul>
        
        
        <ul class="nav navbar-right navbar-nav">
            <li><a href="<?php echo base_url('home/login'); ?>"><i class="glyphicon glyphicon-user"></i> Inicia sesi&oacute;n</a></li>
            <li><a href="<?php echo base_url('home/reg'); ?>"><i class="glyphicon glyphicon-log-in"></i> Registrate</a></li>
        </ul>
    </div>
    </nav>
    <!--Hasta aqui-->
    
    <div class="jumbotron container-fluid">
    <h1 style="padding-right: 7%;">ATOM</h1>
    </div>
    
    <div class="second container-fluid">
        <h2>Sobre <strong>ATOMICITY</strong></h2>
        <div class="col col-sm-4">
            <span class="glyphicon glyphicon-globe mundo" style="color: green;"></span>
        </div>
        
        <div class="let">
            <h4><strong>Nuestro objetivo</strong></h4>
        <p>Hacer m&aacute;s f&aacute;cil la compra de bicicletas alrededor del mundo. </p>
        <p>Hacer ejercicio, ser feliz y montar bicicletas tienen una cosa en com&uacute;n: <em>las hace uno mismo.</></p>
        </div>
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