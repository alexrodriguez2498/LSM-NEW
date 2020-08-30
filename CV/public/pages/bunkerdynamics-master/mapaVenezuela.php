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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="css/jquery.webui-popover.css">
</head>
    
<body>
<section class="menu_completo">
    <?php include 'header.php';?>
</section>

<br><br><br><br><br><br><br><br><br>
<center id="contenedorMapa" style="overflow-x: scroll;">
    <img src="images/mapaVenezuela.png" name="mapaVen" usemap="#mapa" >
    <map id="mapa" name="mapa">
        <area shape="rect" alt="Maracaibo" title="Maracaibo" id="Maracaibo" onclick="myFunction()" coords="106,107,116,122" href="" target="" />
        <area shape="rect" alt="Bajo Grande" title="Bajo Grande" id="BajoGrande" onclick="myFunction()" coords="95,130,108,140" href="" target="" />
        <area shape="rect" alt="La Salina" title="La Salina" id="LaSalina" onclick="myFunction()" coords="134,141,144,152" href="" target="" />
        <area shape="rect" alt="El Tablazo" title="El Tablazo" id="ElTablazo" onclick="myFunction()" coords="122,117,133,130" href="" target="" />
        <area shape="rect" alt="Pto. Miranda" title="Pto. Miranda" id="PtoMiranda" onclick="myFunction()" coords="123,96,134,108" href="" target="" />
        <area shape="rect" alt="Cardon" title="Cardon" id="Cardon" onclick="myFunction()" coords="200,50,209,62" href="" target="" />
        <area shape="rect" alt="Guaranao" title="Guaranao" id="Guaranao" onclick="myFunction()" coords="193,38,204,48" href="" target="" />
        <area shape="rect" alt="Amuay" title="Amuay" id="Amuay" onclick="myFunction()" coords="203,27,213,36" href="" target="" />
        <area shape="rect" alt="El Palito" title="El Palito" id="ElPalito" onclick="myFunction()" coords="333,121,349,138" href="" target="" />
        <area shape="rect" alt="Puerto Cabello" title="Puerto Cabello" id="PuertoCabello" onclick="myFunction()" onclick="myFunction()" coords="360,117,375,133" href="" target="" />
        <area shape="rect" alt="La Guaira" title="La Guaira" id="LaGuaira" onclick="myFunction()" coords="413,116,427,130" href="" target="" />
        <area shape="rect" alt="Jose Terminal" title="Jose Terminal" id="JoseTerminal" onclick="myFunction()" coords="521,146,533,160" href="" target="" />
        <area shape="rect" alt="Puerto La Cruz" title="Puerto La Cruz" id="PuertoLaCruz" onclick="myFunction()" coords="543,134,555,154" href="" target="" />
        <area shape="rect" alt="Guanta" title="Guanta" id="Guanta" onclick="myFunction()" coords="558,129,567,150" href="" target="" />
        <area shape="rect" alt="Pertigalete" title="Pertigalete" id="Pertigalete" onclick="myFunction()" coords="568,122,577,143" href="" target="" />
        <area shape="rect" alt="Cumana" title="Cumana" id="Cumana" onclick="myFunction()" coords="580,121,588,142" href="" target="" />
        <area shape="rect" alt="Guiria" title="Guiria" id="Guiria" onclick="myFunction()" coords="684,113,696,131" href="" target="" />
        <area shape="rect" alt="Matanzas" title="Matanzas" id="Matanzas" onclick="myFunction()" coords="600,259,613,286" href="" target="" />
        <area shape="rect" alt="Puerto Ordaz" title="Puerto Ordaz" id="PuertoOrdaz" onclick="myFunction()" coords="617,251,630,276" href="" target="" />
        <area shape="rect" alt="Palua" title="Palua" id="Palua" onclick="myFunction()" coords="662,264,674,293" href="" target="" />
        <area shape="rect" alt="Boca Grande" title="Boca Grande" id="BocaGrande" onclick="myFunction()" coords="783,221,794,236" href="" target="" />
    </map>
</center>

<div style="display: none;">
    <div id="myContentMaracaibo">
        <ul>
            <li><a href="images/maracaiboMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaMaracaibo<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentBajoGrande">
        <ul>
            <li><a href="images/BajoGrandeMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaBajoGrande<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentLaSalina">
        <ul>
            <li><a href="images/LaSalinaMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaLaSalina<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentElTablazo">
        <ul>
            <li><a href="images/ElTablazoMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaElTablazo<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentPtoMiranda">
        <ul>
            <li><a href="images/PtoMirandaMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaPtoMiranda<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentCardon">
        <ul>
            <li><a href="images/cardonMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaCardon<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentGuaranao">
        <ul>
            <li><a href="images/guaranaoMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaGuaranao<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentAmuay">
        <ul>
            <li><a href="images/amuayMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaAmuay<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentElPalito">
        <ul>
            <li><a href="images/elPalitoMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaElPalito<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentPuertoCabello">
        <ul>
            <li><a href="images/puertoCabelloMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaPuertoCabello<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentLaGuaira">
        <ul>
            <li><a href="images/laGuairaMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaLaGuaira<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentJoseTerminal">
        <ul>
            <li><a href="images/joseTerminalMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaJoseTerminal<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentGuanta">
        <ul>
            <li><a href="images/guantaMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaGuanta<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentPuertoLaCruz">
        <ul>
            <li><a href="images/puertoLaCruzMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaPuertoLaCruz<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentPertigalete">
        <ul>
            <li><a href="images/pertigaleteMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaPertigalete<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentCumana">
        <ul>
            <li><a href="images/cumanaMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaCumana<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentGuiria">
        <ul>
            <li><a href="images/guiriaMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaGuiria<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentMatanzas">
        <ul>
            <li><a href="images/matanzasMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaMatanzas<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentPuertoOrdaz">
        <ul>
            <li><a href="images/puertoOrdazMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaPuertoOrdaz<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentPalua">
        <ul>
            <li><a href="images/paluaMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaPalua<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
    <div id="myContentBocaGrande">
        <ul>
            <li><a href="images/bocaGrandeMin<?php if($leng=="En"){echo "En";}?>.png">Bunkers</a></li>
            <li><a href="images/tablaBocaGrande<?php if($leng=="En"){echo "En";}?>.jpg"  ><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></a></li>
        </ul>
    </div>
</div>

<?php include 'footer.php';?>
<?php include 'include_js.php';?>
<script src="js/jquery.webui-popover.js"></script>
		
<script type="text/javascript">
    (function(){
        $('#Maracaibo').webuiPopover({url:'#myContentMaracaibo'});
        $('#BajoGrande').webuiPopover({ url:'#myContentBajoGrande'});
        $('#LaSalina').webuiPopover({ url:'#myContentLaSalina'});
        $('#ElTablazo').webuiPopover({ url:'#myContentElTablazo'});
        $('#PtoMiranda').webuiPopover({ url:'#myContentPtoMiranda'});
        $('#Cardon').webuiPopover({ url:'#myContentCardon'});
        $('#Guaranao').webuiPopover({ url:'#myContentGuaranao'});
        $('#Amuay').webuiPopover({ url:'#myContentAmuay'});
        $('#ElPalito').webuiPopover({ url:'#myContentElPalito'});
        $('#PuertoCabello').webuiPopover({ url:'#myContentPuertoCabello'});
        $('#LaGuaira').webuiPopover({ url:'#myContentLaGuaira'});
        $('#JoseTerminal').webuiPopover({ url:'#myContentJoseTerminal'});
        $('#Guanta').webuiPopover({ url:'#myContentGuanta'});
        $('#PuertoLaCruz').webuiPopover({ url:'#myContentPuertoLaCruz'});
        $('#Pertigalete').webuiPopover({ url:'#myContentPertigalete'});
        $('#Cumana').webuiPopover({ url:'#myContentCumana'});
        $('#Guiria').webuiPopover({ url:'#myContentGuiria'});
        $('#Matanzas').webuiPopover({ url:'#myContentMatanzas'});
        $('#PuertoOrdaz').webuiPopover({ url:'#myContentPuertoOrdaz'});
        $('#Palua').webuiPopover({ url:'#myContentPalua'});
        $('#BocaGrande').webuiPopover({ url:'#myContentBocaGrande'});

        $(".menu_puerto > a").css({"color":'#FFFFFF', "background-color":'#428bca',"font-weight":'Bold' });
    })();

    function myFunction() {
        $(document).mousemove(function(event) {
            $(".webui-popover").css("margin-left", event.pageX+document.getElementById("contenedorMapa").scrollLeft/20);
            $(".webui-popover").css("margin-top", event.pageY-160-document.body.scrollTop);
            $(document).unbind(event);
        });
    }
</script>
</body>
</html>