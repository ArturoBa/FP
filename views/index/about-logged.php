<?php 
    MF::MenFo();
?>        
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