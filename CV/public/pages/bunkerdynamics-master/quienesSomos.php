<?php
$fp = fopen("lenguaje.txt", "r");
$leng= fgets($fp);
fclose($fp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bunker Dynamics</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include_css.php';?>
</head>
    
<body>
<section class="menu_completo">
    <?php include 'header.php';?>
    <?php include 'slider.php';?>
</section>

<div class="templatemo-welcome" id="templatemo-welcome">
    <div class="container">
        <div class="templatemo-slogan text-center">
            <span class="txt_darkgrey"><?php if($leng=="Es"){echo "¿Quiénes Somos?";}else{echo "Who are we?";}?></span>
            <p class="txt_slogan" style="font-size: 0.5em;"><i><?php if($leng=="Es"){echo "Bunker Dynamics Corp. es una 
                    compañía internacional creada en el año 2011 en Florida, USA con sucursal en Panamá y proyectos de expansión 
                    hacia el Caribe y Sudamérica, dedicada a la comercialización, mercadeo y suministro de Lubricantes y 
                    Combustibles Marinos (Bunkers) a toda nuestra red de buques creada a lo largo de estos años, con el compromiso 
                    de entregar productos de calidad que ofrezcan tranquilidad y seguridad a nuestros clientes.";}

                    else{echo "Bunker Dynamics Corp. is a company established since 2011 at USA with branch in Panama
                    and expansion projects to the Caribbean and South America, dedicated to commerce, marketing and supply
                    of Bunkers and Lubricants Support to our Clients with a permanent commitment to deliver high quality
                    products and services";}?></i>
            </p>
        </div>
        <div class="templatemo-slogan text-left">
            <p class="txt_slogan" style="font-size: 0.5em;"><i>
                    <?php if($leng=="Es"){echo "Nuestros Valores:";}else{echo "Our values";}?>
                    <ul class="txt_slogan" style="font-size: 0.5em;">
                        <li><?php if($leng=="Es"){echo "Competitividad: Con la mejor calidad y el mejor precio en nuestros productos y servicios.";}
                            else{echo "Competitiveness: With the best quality and prices on our products and services.";}?></li>
                        <li><?php if($leng=="Es"){echo "Responsabilidad: Con suministros confiables y en el tiempo estipulado.";}
                            else{echo "Responsibility: With reliable supplies and on-time delivery.";}?></li>
                        <li><?php if($leng=="Es"){echo "Compromiso: Con el ambiente y nuestros clientes.";}
                            else{echo "Commitment: With the environment and our customer’s needs.";}?></li>
                        <li><?php if($leng=="Es"){echo "Calidad: Con productos que cumplan los estándares que exige el negocio marino.";}
                            else{echo "Quality: With products that meet the higher standards required by the marine business. ";}?></li>
                    </ul>
                </i></p>
        </div>
    </div>
</div>

<?php include 'footer.php';?>
<?php include 'include_js.php';?>
		
<script type="text/javascript">
    $(document).ready(function () {
        $(".menu_nosotros > a").css({"color":'#FFFFFF', "background-color":'#428bca',"font-weight":'Bold' });
    });
</script>
</body>
</html>