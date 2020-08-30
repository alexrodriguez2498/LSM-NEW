<?php
    $fp = fopen("lenguaje.txt", "r");
    $leng= fgets($fp);
    fclose($fp);
?>

<div class="templatemo-footer" >
    <div id="templatemo-blog">
        <div class="container">
            <div class="blog_box">
                <div class="col-sm-6 blog_post">
                    <ul class="list-inline">
                        <li class="col-md-12">
                        	<h4><b><?php if($leng=="Es"){echo "Síguenos:";}else{echo "follow us:";}?></b></h4>
                            <span class="symbol" >
                            	<a id="twitterb" href="http://twitter.com/bunkerdynamics">circletwitterbird</a>
                                <a id="facebookb" href="3">circlefacebook</a>
                                <a id="instagramb" href="3">circleinstagram</a>
                                <a id="googleb" href="https://plus.google.com/+bunkerdynamics">circlegoogleplus</a>
                            </span>
                        </li>
                    </ul>
                </div> 
                
                <div class="col-md-6 blog_post contact-page">
                    <ul class="list-inline">
                        <li class="col-md-12">
                            <h4><b><?php if($leng=="Es"){echo "Contacto:";}else{echo "Contact:";}?></b></h4>
                            <ul class="contact-info">
                                <li><i class="icon-envelope"></i>info@bunkerdynamics.com</li>
                                <li><i class="icon-map-marker"></i>Av. Ramon Arias, Edificio Ropardi, Piso 3. Oficina 3C, Ciudad de Panama</li>
                                <li><i class="icon-phone"></i>+58 412 2363799</li>
                            </ul>
                        </li>
                    </ul>	
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container footer">
    <div class="text-center">
    	<div class="footer_bottom_content">
            <span>Copyright © 2015 <a href="#">Bunker Dynamics</a>
            - <?php if($leng=="Es"){echo "Desarrollado por:";}else{echo "Developed by:";}?> <a rel="nofollow" href="Mary Morillo & Luis Carvajal" target="_parent">M&L</a></span>
        </div>
    </div>
</div>