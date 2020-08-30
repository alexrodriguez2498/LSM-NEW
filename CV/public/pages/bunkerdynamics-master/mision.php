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
            <span class="txt_darkgrey"><?php if($leng=="Es"){echo "Misión";}else{echo "Mission";}?></span>
            <p class="txt_slogan" style="font-size: 0.5em;"><i><?php if($leng=="Es"){echo "Satisfacer las necesidades de nuestros clientes 
                    de Lubricantes y Combustibles Marinos (Bunkers) en los principales puertos del Caribe y Sudamérica, siendo suplidores directos o 
                    estableciendo alianzas estratégicas con proveedores locales en cada uno de estos puertos donde tenemos presencia, lo cual nos 
                    permite tener los precios más competitivos, garantizando plenamente el cumplimiento y la calidad de nuestros productos.";}
                    else{echo "Satisfy the customers’ needs for Bunker and Lubricants in the major ports in the Caribbean and South America, as
                    direct supplier or through our strategic alliances with local suppliers in the different ports where we operate, with competitive
                    prices, ensuring availability and quality of products";}?></i>
            </p>
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