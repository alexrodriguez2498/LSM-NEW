<?php
$fp = fopen("lenguaje.txt", "r");
$leng= fgets($fp);
fclose($fp);
?>

<div style="padding: 120px 0 0 0;">
    <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#templatemo-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#templatemo-carousel" data-slide-to="1"></li>
            <li data-target="#templatemo-carousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h1><?php if($leng=="Es"){echo "BIENVENIDOS A BUNKER DYNAMICS";}else{echo "WELCOME TO BUNKER DYNAMICS";}?></h1>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="col-sm-6 col-md-6">
                            <h1><?php if($leng=="Es"){echo "FLUIDOS";}else{echo "FLUIDS";}?></h1>
                            <p><?php if($leng=="Es"){echo "Bunker Dynamics Corp.  Creciendo en base a las necesidades de nuestros clientes";}else{echo "Bunker Dynamics Corp.  Grow based on the needs of our customers";}?></p>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <h1><?php if($leng=="Es"){echo "ENERGIA";}else{echo "ENERGY";}?></h1>
                            <p><?php if($leng=="Es"){echo "Los Productos y Servicios que Ofrecemos de Alta Calidad.";}else{echo "The products and services that offer High Quality .";}?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <div class="container">
                    <div class="carousel-caption">
                        <h1><?php if($leng=="Es"){echo "";}else{echo "";}?></h1>
                        <h3>
                            <p><?php if($leng=="Es"){echo "Apoyando a empresas del sector marítimo internacional con el objetivo de establecer relaciones comerciales a largo plazo.";}else{echo "Supporting international companies in the maritime sector with the aim of establishing long-term business relationships .";}?></p>
                        </h3>
                        <p><a class="btn btn-lg btn-orange" href="quienesSomos.php" role="button"><?php if($leng=="Es"){echo "Leer Mas";}else{echo "Read More";}?> </a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#templatemo-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#templatemo-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>