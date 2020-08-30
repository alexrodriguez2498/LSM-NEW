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
            <span class="txt_darkgrey"><?php if($leng=="Es"){echo "Visión";}else{echo "Vision";}?></span>
            <p class="txt_slogan" style="font-size: 0.5em;"><i><?php if($leng=="Es"){echo "Lograr el posicionamiento en el mercado de Lubricantes 
                    y Combustibles Marinos (Bunkers) en los principales puertos del Caribe y Sudamérica, con sistemas de gestión de la calidad y personal 
                    altamente calificado y comprometido con el mejoramiento continúo, para transformar a nuestra empresa en la mejor opción de la región.";}
                    else{echo "Achieve a Lubricant and Bunkers market position in the Caribbean and South America major ports
                    offering quality management with the commitment to continuous improvement in order to be the best choice for service and support";}?></i>
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