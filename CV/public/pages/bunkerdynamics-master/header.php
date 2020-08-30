<?php
    $fp = fopen("lenguaje.txt", "r");
    $leng= fgets($fp);
    fclose($fp);
?>
<div class="navbar yamm navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="#" class="navbar-brand img_menu">
                <img src="images/logo.svg" alt="Bunker Dynamics" title="Bunker Dynamics" style="height:120px; margin-bottom: -25px;" />
            </a>
        </div>
        <div id="navbar-collapse-1" class="navbar-collapse collapse float_right" style="margin-top: 40px;">
            <ul class="nav navbar-nav">
                <li class="dropdown menu_inicio">
                    <a href="index.php"  class="dropdown-toggle"><?php if($leng=="Es"){echo "INICIO";}else{echo "HOME";}?></a>
                </li>
                <li class="dropdown menu_nosotros">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php if($leng=="Es"){echo "NOSOTROS";}else{echo "ABOUT US";}?><b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a tabindex="-1" href="quienesSomos.php"><?php if($leng=="Es"){echo "¿QUIÉNES SOMOS?";}else{echo "WHO ARE WE?";}?></a></li>
                        <li><a tabindex="-1" href="mision.php"><?php if($leng=="Es"){echo "MISIÓN";}else{echo "MISSION";}?></a></li>
                        <li><a tabindex="-1" href="vision.php"><?php if($leng=="Es"){echo "VISIÓN";}else{echo "VISION";}?></a></li>
                    </ul>
                </li>
                <li class="dropdown menu_producto">
                     <a href="productos.php" class="dropdown-toggle"><?php if($leng=="Es"){echo "PRODUCTOS & SERVICIOS";}else{echo "PRODUCTS & SERVICES";}?></a>
                </li>
                <li class="dropdown menu_puerto">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php if($leng=="Es"){echo "PUERTOS";}else{echo "PORTS";}?><b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a tabindex="-1" href="mapaVenezuela.php"><?php if($leng=="Es"){echo "VENEZUELA";}else{echo "VENEZUELA";}?></a></li>
                        <li><a tabindex="-1" href="mapaColombia.php"><?php if($leng=="Es"){echo "COLOMBIA";}else{echo "COLOMBIA";}?></a></li>
                        <li><a tabindex="-1" href="#"><?php if($leng=="Es"){echo "OTROS PUERTOS";}else{echo "OTHERS PORTS ";}?></a></li>
                    </ul>
                </li>
                <li class="dropdown menu_contacto">
                    <a href="contact.php"  class="dropdown-toggle"><?php if($leng=="Es"){echo "CONTACTENOS";}else{echo "CONTACT US";}?></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row" style="margin-right: 25px; cn">
        <a href="lenguaje.php?leng=Es"  style="float:right;">
            <img src="images/ico_venezuela.png" alt="Responsive image">
        </a>
        <a href="lenguaje.php?leng=En"  style="float:right;">
            <img src="images/ico_usa.png" style="margin-right: 10px;" alt="Responsive image">
        </a>
    </div>
</div>
