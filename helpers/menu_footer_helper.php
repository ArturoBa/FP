<?php 
    class MF{
        
        static $instance;
        public static function MenFo(){
            self::$instance = new MF();
        }
        
        //A partir de aqui se llaman el menu, el CDN de Bootstrap   el footer
        function __construct(){
            //PARTE DEL PHP
            
            //Llamo de la variable $_SESSION el usuario que está loggeado
            $nombre = $_SESSION["user"]->nombre;
            
            
?>
        <!--Aqui dentro estara el menu y los CDN's de Bootstrap-->
            <html>
            <head>
                <title></title>
                <!-- Latest compiled and minified CSS -->
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

                    <!-- Optional theme -->
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

                    <!-- Latest compiled and minified JavaScript -->
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

                <style>
                    footer{
                        margin-bottom: 20px;
                    }
                </style>

            </head>
            <body>

                <!--Todo el menu esta desde aqui-->
                <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand" href="<?php echo base_url('user/'); ?>" title="Inicio">ATOMBIKE</a></div>
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url('user/account'); ?>">Mi cuenta</a></li>
                        <li><a href="<?php echo base_url('user/upload'); ?>">Subir anuncio</a></li>
                        <li><a href="<?php echo base_url(''); ?>">Categor&iacute;a</a></li>
                        <li><a href="<?php echo base_url('user/about'); ?>">Nosotros</a></li>
                    </ul>


                    <ul class="nav navbar-right navbar-nav">
                        <li><a><i class="glyphicon glyphicon-user"></i> Hola <em><?php echo $nombre; ?></em></a></li>
                        <li><a href="<?php echo base_url('user/logout'); ?>"><i class="glyphicon glyphicon-log-out"></i> Salir</a></li>
                    </ul>
                </div>
                </nav>
                <!--Hasta aqui-->
            <!--Final del menu y los CDN'S -->
<?php            
        }
        
        function __destruct(){
?>
        <!--Aqui dentro iran el footer y el cierre de pagina-->
            <!--Desde aqui esta el footer-->
                <hr>
            <footer class="container-fluid text-center">
                <a href="#">ATOMICITY</a> &reg; - <span id="foottime"></span>
            </footer>
            <!--Hasta aqui-->

            <script>
                //Obtiene el año actual para ponerlo en el footer junto a la marca registrada
                    document.getElementById("foottime").innerHTML = new Date().getFullYear();
            </script>
        </body>
        </html>
        <!--Fin del footer y el cierre de pagina-->
<?php
        }
    }