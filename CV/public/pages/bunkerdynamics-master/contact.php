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

<div id="templatemo-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <iframe width="100%" src="mapGoogle.html" height="500" scrolling="no" ></iframe>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 contact_right">
                <p><?php if($leng=="Es"){echo "Comunicate con nosotros a travez del siguiente formulario.";}else{echo "Please contact us through the following form.";}?></p>
                        
                <form class="form-horizontal" method="post" action="mail.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder=<?php if($leng=="Es"){echo "'Tu Nombre...'";}else{echo "'your name...'";}?> maxlength="40" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder=<?php if($leng=="Es"){echo "'Tu Correo Electronico...'";}else{echo "'your email...'";}?> maxlength="40" />
                    </div>
                    <div class="form-group">
                        <textarea  class="form-control" name="message" style="height: 130px;" placeholder=<?php if($leng=="Es"){echo "'Escribe tu Mensaje...'";}else{echo "'write your message...'";}?>></textarea>
                    </div>
                    <button type="submit" class="btn btn-orange pull-right"><?php if($leng=="Es"){echo "ENVIAR";}else{echo "SEND";}?></button>
                </form>
            </div>
        </div>
    </div>
</div>
        
<?php include 'footer.php';?>
<?php include 'include_js.php';?>
        
<script type="text/javascript">
    $(document).ready(function () {
        $(".menu_contacto > a").css({"color":'#FFFFFF', "background-color":'#428bca',"font-weight":'Bold' });
    });
</script>
</body>
</html>