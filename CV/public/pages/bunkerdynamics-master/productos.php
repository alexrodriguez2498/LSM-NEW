<?php
$fp = fopen("lenguaje.txt", "r");
$leng= fgets($fp);
fclose($fp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bunker Dynamics</title>
	<meta name="keywords" content="Bunkerdynamics,Bunkers,Buy,Cardon,Castrol,Cilmar,Commercial
	Commodities,Crumar,Cylinder,Cyltech,Delivery,Deliveries,Diesel,Dieselmar,Products,Puerto Cabello,
	Puerto La Cruz,Puerto Ordaz,Punto Fijo,Refrigeration,Sales,Services,Shell,Ship,Ships,Shore,Stern
	Tubes,Supply,Supplier,Suppliers,Support Systems,Talusia,Technical,Terminal,TLX,Total,Trucks,Trader
	Traders,Turbines,Venezuela,Venezuelan,Vessel,Vessels,Visga,PDVSA,PDV,Lubricant,Lubricants,Lubs,IFO
	Oil Oils" />
	<meta name="description" content="bunker dynamics" />
	<meta charset="UTF-8">
	<meta name="distribution" content="global"/>
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
			<span class="txt_darkgrey"><?php if($leng=="Es"){echo "Productos";}else{echo "Products";}?></span>
		</div>
	</div>
</div>

<div class="container">
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingOne">
				<h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<h3 style="text-align: center"><?php if($leng=="Es"){echo "Lubricantes Marinos";}else{echo "Marine Lubricants";}?></h3>
					</a>
				</h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
					<h3><?php if($leng=="Es"){echo "Cilindros de Motores";}else{echo "Cylinder Engine";}?></h3>
					<ul class="nav navbar-nav">
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal3"> PDV Cilmar 70 (Venezuela)</a>
							<div id="myModal3" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">PDV Cilmar 70 (Venezuela)</h4>
										</div>
										<div class="modal-body">

											PDV <?php if ($leng=="Es"){echo "<a href=\"pdf/Cilmar_70.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}
														else{echo "<a href=\"pdf1/PDV-CILMAR.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}?>:

											<p><h3><b><?php if($leng=="Es"){echo "Características";}else{echo "Characteristics";}?>:</b></h3>

											<h5 align="justify">
												<?php if($leng=="Es"){echo "Aceite para motores diésel marinos con un amplio margen de seguridad.
											Diseñado para la lubricación de cilindros de motores de diésel de cruceta
											de baja velocidad.";}else{echo "Oil for marine diesel engines with a wide safety margin. Designed for
											 lubricating engine cylinders crosshead diesel low speed";}?>
											</h5><br>

											<p><h3><b><?php if($leng=="Es"){echo "Usos";}else{echo "Applications";}?>:</b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Ofrece una protección integral bajo las más exigentes condiciones de                                                servicio.
												Esta línea completa cubre todas las necesidades operacionales.
												CILMAR 70 (SAE 50, BN 70) es el lubricante más ampliamente usado en motores
												operando con combustibles intermedio o pesado con alto nivel de azufre.";}else{echo "
												It offers comprehensive protection under the most demanding conditions.
												This complete line covers all operational needs.
												CILMAR 70 ( SAE 50 , BN 70 ) is the most widely used lubricant for engines
												operating on intermediate or heavy fuels with high sulfur .";}?>
											</h5><br>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<br><br><br>

					<h3><?php if($leng=="Es"){echo "Sistemas y Crucetas";}else{echo "Systems and Crankcase";}?></h3>

					<ul class="nav navbar-nav">
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal6">PDV Crumar 3005 (Venezuela)</a>
							<div id="myModal6" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">PDV Crumar 3005 (Venezuela)</h4>
										</div>
										<div class="modal-body">

											PDV <?php if ($leng=="Es"){echo "<a href=\"pdf/Crumar_3005.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}
											else{echo "<a href=\"pdf1/CRUMAR.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}?>:

											<h3><b><?php if($leng=="Es"){echo "Características:";}else{echo "Characteristics:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Aceite lubricante monogrado, elaborado con básicos altamente refinados y
												aditivos cuidadosamente seleccionados que le proporcionan una alta
												detergencia que asegura la limpieza del cárter, del cigüeñal y de
												las áreas bajo la corona del pistón, apropiada alcalinidad para
												neutralizar los ácidos de la combustión, apropiadas cualidades
												antioxidantes y excepcional poder antidesgaste al sobrepasar la
												etapa 10 de la prueba FZG.";}else{echo "
												Monograde lubricant oil , made with highly refined base and
												carefully selected additives that provide a high
												detergency ensures cleaning crankcase , crankshaft and
												the areas under the piston crown , proper alkalinity
												neutralize combustion acids , appropriate qualities
												antioxidants and antiwear exceptional power to exceed the
												Stage 10 of the FZG test.";}?>
											</h5><br>
                                            
											<h3><b><?php if($leng=="Es"){echo "Usos:";}else{echo "Applications:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Ha sido especialmente desarrollado para cumplir con los requisitos de                                                 lubricación
												del cárter de motores diesel tipo cruceta de baja velocidad. Adicionalmente puede
												ser utilizado en cojinetes y bocinas del eje de propulsión, engranajes medianamente
												cargados y compresores de aire donde un aceite con las cualidades descritas
												satisfaga plenamente los requerimientos de lubricación de los mismos.";}else{echo "
												It has been specially developed to meet the lubrication requirements
												Crankcase diesel crosshead type low speed . Additionally can
												be used in bearings and drive shaft speakers , gears moderately
												loaded and air compressors where an oil with the qualities described
												fully meet the lubrication requirements thereof.";}?>
											</h5>.<br>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<br><br><br>

					<h3><?php if($leng=="Es"){echo "Motores Diesel Mediana Velocidad con Combustible Residual";}
						else{echo "Medium Speed ​​Diesel Engines with fuel oil";}?></h3>
					<ul class="nav navbar-nav">
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal9">PDV Dieselmar MR (Venezuela)</a>
							<div id="myModal9" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">PDV Dieselmar MR (Venezuela)</h4>
										</div>
										<div class="modal-body">
											PDV <?php if ($leng=="Es"){echo "<a href=\"pdf/Dieselmar_MR.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}
												      else{echo "<a href=\"pdf1/PDV-DIESELMAR MR.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}?>:


											<h3><b><?php if($leng=="Es"){echo "Características:";}else{echo "Characteristics:";}?></b></h3>
											<br><h5 align="justify">
												<?php if($leng=="Es"){echo "Aceite monogrado elaborado con una mezcla de básicos altamente refinados y aditivos
												químicos que le confieren propiedades detergentes/dispersantes para minimizar la formación
												de depósitos en el motor, así como características antidesgaste, anti-herrumbre, anti-espumantes
												y anti-corrosivas, para garantizar la adecuada lubricación del cárter y cilindros de motores
												de mediana velocidad. Satisface las especificaciones correspondientes al nivel de servicio API CF.";}else                                                {echo"
												Monograde oil made ​​from a blend of highly refined base and additives
												chemicals that confer detergent / dispersant properties to minimize formation
												of engine deposits and wear characteristics , anti- rust , anti- foaming
												and anti- corrosive , to ensure adequate lubrication of the crankcase and cylinder engines
												medium speed . Meets the specifications at the service level API CF.";}?>
											</h5>.<br>

											<h3><b><?php if($leng=="Es"){echo "Usos:";}else{echo "Applications:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Formulado específicamente para la lubricación de motores diesel de mediana                                                velocidad que utilizan
												combustible residual con contenido de azufre superior a 2.5% en peso.";}else{echo "Formulado                                                específicamente para la lubricación de motores diesel de mediana velocidad que utilizan
												combustible residual con contenido de azufre superior a 2.5% en peso.";}?>
											</h5>.<br>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<br><br><br>

					<h3><?php if($leng=="Es"){echo "Motores Diesel Mediana y Alta Velocidad con Combustible Destilado";}
						else{echo "Engines Medium and High Speed ​​Diesel with Fuel Distillate";}?></h3>
					<ul class="nav navbar-nav">
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal12">PDV Dieselmar MD (Venezuela)</a>
							<div id="myModal12" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">PDV Dieselmar MD (Venezuela)</h4>
										</div>
										<div class="modal-body">
											PDV <?php if ($leng=="Es"){echo "<a href=\"pdf/Dieselmar_MD.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}
											else{echo "<a href=\"pdf1/PDV-DIESELMAR MD.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}?>:


											<h3><b><?php if($leng=="Es"){echo "Características:";}else{echo "Characteristics:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Aceite elaborado con una mezcla de básicos altamente refinados y aditivos que le                                             confieren
											propiedades dispersantes a bajas temperaturas, aún en presencia de agua y detergentes a altas
											temperaturas para minimizar la formación de depósitos en el motor, así como características
											antidesgaste, anti-herrumbrante, anti-espumantes y anticorrosivas, para garantizar la adecuada
											lubricación del cárter y cilindros de motores diesel de mediana y alta velocidad. Satisface las
											especificaciones correspondientes al servicio CF de la clasificación API/ASTM/SAE y cumple y/o
											excede además los requisitos de la especificación MIL-L-2104D.";}else{echo"
											Oil made ​​from a blend of highly refined base and additives that give you
											dispersing properties at low temperatures , even in the presence of water and detergents at high
											temperatures to minimize the formation of engine deposits and characteristics
											antiwear , anti- herrumbrante , antifoam and anticorrosion , to ensure adequate
											crankcase and cylinder lubrication of diesel medium and high speed engines. meets
											CF service for the API / ASTM / SAE classification and meets specifications and / or
											also exceeds the requirements of MIL- L - 2104D .";}?></h5>
											<br>
                                            
											<h3><b><?php if($leng=="Es"){echo "Usos:";}else{echo "Applications:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Formulado específicamente para la lubricación de motores diesel, turbo                                             alimentados, de mediana y
											alta velocidad que utilizan diesel mediano (DMX) o diesel marino (DMA) como combustible. En la
											lubricación de cojinetes y bocinas del eje de propulsión y engranajes reductores.";}else{echo "
											Specifically formulated for lubricating diesel engines, turbo fed , middle and
											High speed diesel using medium (DMX ) or marine diesel (DMA ) as fuel . In the
											lubricating bearings and drive shaft speakers and reduction gears .";}?></h5>
											<br>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<br><br><br>

					<h3><?php if($leng=="Es"){echo "Sistemas Hidráulicos";}else{echo "Hydraulics Systems";}?></h3>
					<ul class="nav navbar-nav">
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal15">PDV Hidramar (Venezuela)</a>
							<div id="myModal15" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">PDV Hidramar (Venezuela)</h4>
										</div>
										<div class="modal-body">

											PDV <?php if ($leng=="Es"){echo "<a href=\"pdf/Hidramar.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}
											else{echo "<a href=\"pdf1/HIDRAMAR-AV.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}?>:

											<h3><b><?php if($leng=="Es"){echo "Características:";}else{echo "Characteristics:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Aceite hidráulico de alto índice de viscosidad, bajo punto de fluidez
											y propiedades antidesgaste. Cumple los requerimientos de las especificaciones
											NF E 48.600 tipo HV y DIN 51.525 tipo HLP.";}else{echo "
											Hydraulic oil high viscosity index , low pour point
											and antiwear properties . Meets the specification requirements
											NF E 48.600 HV type and type HLP DIN 51,525 .";}?></h5>
                                            
											<h3><b><?php if($leng=="Es"){echo "Usos:";}else{echo "Applications:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Se recomienda principalmente para sistemas hidráulicos sometidos a condiciones
											de temperaturas severas tales como equipos hidráulicos de cubierta, sistemas de
											control remoto, telemotores y sistemas de engranajes de maniobra.";}else{echo "
											It is mainly recommended for hydraulic systems under conditions
											severe temperatures such as hydraulic deck equipment , systems
											remote control, telemotor and gear systems maneuver.";}?></h5>
											<br><br>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<br><br><br>

					<h3><?php if($leng=="Es"){echo "Turbinas";}else{echo "Turbines";}?></h3>
					<ul class="nav navbar-nav">
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal18">PDV Turbolub (Venezuela)</a>
							<div id="myModal18" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">PDV Turbolub (Venezuela)</h4>
										</div>
										<div class="modal-body">

											PDV <?php if ($leng=="Es"){echo "<a href=\"pdf/Turbolub-T.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}
											else{echo "<a href=\"pdf1/PDV-TURBOLUB.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}?>:


											<h3><b><?php if($leng=="Es"){echo "Características:";}else{echo "Characteristics:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Aceite elaborado con básicos de alto índice de viscosidad, especialmente                                                 refinados y
												tratados para obtener una gran estabilidad química. Contienen aditivos que les confieren
												características sobresalientes de resistencia a la oxidación y protección contra la herrumbre,
												lo cual permite un excelente comportamiento en condiciones variables de operación.
												Este producto en el grado ISO 32 cumple con los requisitos de GEK 32568-F de la General
												Electric; además este grado y el resto cumplen con los requerimientos de la BS- 489, ISO 8068,
												DIN 51524 Parte 1, DIN 51515 (TD-L) y P-38 (ISO 32), P-54 (ISO 68) y P-55 (ISO 46) de CINCINNATI
												MACHINE. Satisface la norma COVENIN 1122 y posee el sello de calidad NORVEN.";}else{echo "Oil produced                                                 with basic high viscosity index, especially refined and
												treated for high chemical stability. They contain additives that give them
												outstanding characteristics of oxidation resistance and rust protection ,
												This allows excellent performance in varying operating conditions.
												This product in the ISO 32 grade meets the requirements of GEK 32568 -F General
												Electric ; besides this degree and the rest meet the requirements of BS 489 , ISO 8068 ,
												DIN 51524 Part 1 , DIN 51515 (TD- L ) and P -38 ( ISO 32 ), P -54 (ISO 68) and P -55 (ISO 46) CINCINNATI
												MACHINE . Satisfies the COVENIN 1122 standard and has the quality seal NORVEN .";}?>
												<br></h5>

											<h3><b><?php if($leng=="Es"){echo "Usos:";}else{echo "Applications:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Se recomienda principalmente para la lubricación de cojinetes de turbinas
												a gas, vapor e hidráulicas, sistemas de lubricación por baño y cajas reductoras
												que no estén sometidas a cargas variables o vibraciones. El grado ISO 32 se
												recomienda para la lubricación de turbinas a gas marca General Electric modelo
												S-5001, las cuales presentan cojinetes sometidos a altas temperaturas de operación.
												El grado G-56 ha sido especialmente formulado para cumplir con los requerimientos de
												lubricación de los cojinetes de turbinas Hitachi.";}else{echo "
												It is recommended primarily for the lubrication of turbines
												gas , steam and hydraulic , lubrication systems and gearboxes bathroom
												which are not subject to variable loads or vibrations . The degree ISO 32
											    recommended for the lubrication of gas turbines General Electric brand model
												S -5001 , which have bearings subjected to high operating temperatures .
												The degree G - 56 has been specially formulated to meet the requirements
												lubricating bearings Hitachi turbines.";}?>
											</h5>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<br><br><br>

					<h3><?php if($leng=="Es"){echo "Sistemas de Engranajes";}else{echo "Gear Systems";}?></h3>
					<ul class="nav navbar-nav">
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal21">PDV Engralub (Venezuela)</a>
							<div id="myModal21" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">PDV Engralub (Venezuela)</h4>
										</div>
										<div class="modal-body">

											PDV <?php if ($leng=="Es"){echo "<a href=\"pdf/Engralub.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}
											else{echo "<a href=\"pdf1/ENGRALUB.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}?>:

											<h3><b><?php if($leng=="Es"){echo "Características:";}else{echo "Characteristics:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Aceite mineral altamente refinado que contiene aditivos, especialmente de extrema presión,
											que le imparten una excelente capacidad de carga y una buena resistencia al desgaste. Este
											aceite llena los exigentes requerimientos de:";}else{echo "Highly refined mineral oil containing additives, especially extreme pressure ,
											which they impart excellent capacity and good wear resistance. East
											oil meets the demanding requirements of:";}?>
												<br>
												<ul>
													<li>USS 224
													<li>AGMA 9005-D94
													<li>David Brown S1.53.101(E)
													<li>DIN 51517 Part 3
												</ul></h5>

											<h3><b><?php if($leng=="Es"){echo "Usos:";}else{echo "Applications:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Recomendado especialmente para la lubricación de engranajes industriales encerrados sometidos a
											cargas severas o de impacto, las cuales no pueden soportar satisfactoriamente aceites minerales
											puros y donde se necesitan lubricantes con aditivos de extrema presión (EP). No se recomienda
											para engranajes sinfín con corona de bronce.";}else{echo "
											Especially recommended for lubrication of industrial gears locked under
											severe loads or impact , which can not withstand satisfactorily mineral oils
											pure and where needed lubricants extreme pressure additives ( EP ) . It is not recommended
											worm gear with bronze crown .";}?></h5>
											<br><br>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<br><br><br>

					<h3><?php if($leng=="Es"){echo "Compresores de Aire";}else{echo "Air Compressors";}?></h3>
					<ul class="nav navbar-nav">
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal24">PDV Compresolub (Venezuela)</a>
							<div id="myModal24" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">PDV Compresolub (Venezuela)</h4>
										</div>
										<div class="modal-body">
											PDV <?php if ($leng=="Es"){echo "<a href=\"pdf/Compresolub.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}
												        else{echo "<a href=\"pdf1/PDV-COMPRESOLUB.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}?>:


											<h3><b><?php if($leng=="Es"){echo "Características:";}else{echo "Characteristics:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Lubricante para compresores elaborado con aceites básicos parafínicos de alta                                                calidad y aditivos
												antioxidantes y antiherrumbrante en una proporción óptima que le confiere alta estabilidad a la
												oxidación, baja tendencia a la formación de depósitos de carbón en las válvulas de escape y en los
												sistemas de descarga de compresores, minimizando el riesgo de fuego y explosiones, extendiendo los
												periodos de servicio y prolongando la vida del compresor adicional a una excelente protección contra
												la corrosión y la herrumbre. Cumple con la especificación DIN-51506-VDL parte 2 e ISO DP-6521 categoría
												2-DAB y la norma venezolana COVENIN 1926 y posee el sello de calidad NORVEN.";}else{echo "Compressor                                                 lubricant made ​​from paraffinic base oils and high quality additives
												antioxidants and antiherrumbrante in an optimal ratio which gives high stability to
												oxidation , low tendency to form carbon deposits in the exhaust valves and the
												compressor discharge systems , minimizing the risk of fire and explosions , spreading
												periods of service and extending the life of the additional compressor excellent protection
												corrosion and rust . Meets DIN - 51506 - VDL specification part 2 and ISO DP- 6521 Category
												2 -DAB and the Venezuelan standard COVENIN 1926 and possesses the quality seal NORVEN.";}?>
												<br></h5>

											<h3><b><?php if($leng=="Es"){echo "Usos:";}else{echo "Applications:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Se recomienda para la lubricación de cilindros y cojinetes de compresores                                                 reciprocantes, de aire, con
												temperatura de descarga máxima de 220° C. También puede ser usado en compresores centrífugos o rotativos
												de los tipos paleta o tornillo. Sirve como medio de transferencia de calor en sistemas de calefacción.";}                                                else{echo"
												It is recommended for lubrication and bearing cylinder reciprocating compressor , air , with
												maximum discharge temperature of 220 ° C also can be used in centrifugal compressors or rotary
												the screw blade or types . It serves as a heat transfer in heating systems.";}?>
											</h5>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<br><br><br>

					<h3><?php if($leng=="Es"){echo "Compresores de Refrigeración";}else{echo "Refrigeration Compressors";}?></h3>
					<ul class="nav navbar-nav">
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal27">PDV Frilub (Venezuela)</a>
							<div id="myModal27" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">PDV Frilub (Venezuela)</h4>
										</div>
										<div class="modal-body">
											PDV <?php if ($leng=="Es"){echo "<a href=\"pdf/Frilub.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}
												      else{echo "<a href=\"pdf1/FRILUB.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}?>:

											<h3><b><?php if($leng=="Es"){echo "Características:";}else{echo "Characteristics:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Aceite nafténico altamente refinado que tiene una gran estabilidad química y                                                 térmica, bajo punto de
												fluidez y de floculación y un punto de anilina intermedio lo cual indica un mediano poder solvente.";}                                                else{echo "
												highly refined naphthenic oil having a high chemical and thermal stability , low-
												fluidity and flocculation and aniline intermediate point indicating a solvent medium power.";}?>
											</h5><br>
											<h3><b><?php if($leng=="Es"){echo "Usos:";}else{echo "Applications:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Su bajo punto de fluidez y de floculación lo hacen apropiado en la                                                 lubricación de compresores de
												refrigeración que utilizan amoníaco o freón como fluido refrigerante; así como para la lubricación
												de elementos de máquinas que operan a bajas temperaturas ambientales. Por su gran estabilidad térmica,
												su composición de hidrocarburos estables y su gran conductividad térmica, es adecuado para ser utilizado
												como fluido de transferencia de calor.";}else{echo "
												Its low pour point and flocculation make it suitable for the lubrication of compressors
												cooling using ammonia or freon as a refrigerant ; and for lubrication
												elements of machines operating at low ambient temperatures. For its high thermal stability ,
												stable composition of hydrocarbons and great thermal conductivity , is suitable for use
												as heat transfer fluid.";}?>
											</h5><br>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<br><br><br>

					<h3><?php if($leng=="Es"){echo "Grasas";}else{echo "Greases";}?></h3>
					<ul class="nav navbar-nav">
						<li><a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal30">PDV Industrial EP</a>
							<div id="myModal30" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">PDV Industrial EP</h4>
										</div>
										<div class="modal-body">
											PDV <?php if ($leng=="Es"){echo "<a href=\"pdf/Industrial_EP.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}
													  else{echo "<a href=\"pdf1/PDV-INDUSTRIAL.pdf\" target=\"_blank\"> <img src=\"images/PDF.jpg\" width=\"40px\"> </a>";}?>:

                                                
											<h3><b><?php if($leng=="Es"){echo "Características:";}else{echo "Characteristics:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Grasa de servicio múltiple, elaborado con aceites básicos refinados y jabón de litio, a los
											cuales se le añaden aditivos de extrema presión (EP), los cuales le confieren una excelente
											capacidad para el soporte de cargas. Esta grasa es resistente al arrastre por agua, de muy buena
											estabilidad mecánica y a la oxidación, buena bombeabilidad y brinda protección contra la corrosión
											y la formación de herrumbre. Excede con los requisitos establecidos en la norma COVENIN 967/4 para
											grasas lubricantes de uso automotor e industrial. Este producto posee el sello de calidad NORVEN.";}else{echo "
											Multi- service grease , made with refined base oils and lithium soap to
											which additives are added extreme pressure ( EP ) , which gives it an excellent
											ability to support loads . This fat is very good resistant to water wash
											mechanical stability and oxidation , good pumpability and provides corrosion protection
											and the formation of rust. Exceeds the requirements of standard 967/4 COVENIN
											lubricating greases for automotive and industrial use. This product has the quality seal NORVEN.";}?>
												<br></h5>

											<h3><b><?php if($leng=="Es"){echo "Usos:";}else{echo "Applications:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Industrialmente, está destinada a la lubricación de todo tipo de cojinetes planos y de rodamientos,
												que operan bajo condiciones de altas cargas. En el campo automotor, es adecuada para proteger y alargar
												la vida de las puntas de ejes y juntas universales (crucetas). También en aquellas aplicaciones donde
												existan altas cargas (extrema presión) y cuya temperatura operacional no exceda los 150 grados °C.
												La grasa Industrial EP-00, se utiliza en algunas cajas de engranajes que requieren grasa como
												lubricante.";}else
												{echo"Industrially, it is intended for the lubrication of all bearings and flat bearing ,
												They are operating under high loads. In the automotive field , it is adequate to protect and extend
												the life of the shaft ends and universal joints ( crosspieces ) . Also in those applications where
												there are high loads (extreme pressure) and whose operational temperature does not exceed 150 degrees ° C .
												Industrial grease EP -00 , it is used in some gearboxes that require fat as
												lubricant.";}?></h5><br>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li><a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal31">PDV Chasis</a>
							<div id="myModal31" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">PDV Chasis</h4>
										</div>
										<div class="modal-body">
											PDV <a href="pdf/chasis.pdf" target="_blank"> <img src="images/PDF.jpg" width="40px"></a>

											<h3><b><?php if($leng=="Es"){echo "Características:";}else{echo "Characteristics:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Grasa elaborada con aceites básicos refinados, espesados con jabón de calcio el                                              cual le confiere
											una buena resistencia al arrastre por agua. Excede los requisitos de la clase de \"Grasa de Servicio
											Liviano\" de la norma venezolana COVENIN 967/2.";}else{echo "
											Grease made ​​with refined base oils, thickened with calcium soap which gives
											good resistance to water wash . Exceeds the requirements of the class of \" Grease Service
											Light \" of the Venezuelan COVENIN standard 967/2 .";}?></h5>
											<br>

											<h3><b><?php if($leng=="Es"){echo "Usos:";}else{echo "Applications:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "La grasa Chasis es adecuada para la lubricación de partes móviles de máquinas                                                y equipos sujetos a
												condiciones de trabajo liviano, donde la temperatura operacional no sobrepase los 70°C, como cojinetes
												de bomba de agua, bujes, guías y cojinetes sencillos de rastras de maquinaria agrícola y de otros
												equipos que requieran una grasa de este tipo.";}else{echo "The chassis grease is suitable for lubricating                                                moving parts of machinery and equipment subject to
												light duty conditions where the operating temperature does not exceed 70 ° C , as bearings
												water pump , bushings, bearings guides and simple harrows and other agricultural machinery
												equipment requiring this type grease .";}?>
											</h5><br>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li><a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal32">PDV Múltiple</a>
							<div id="myModal32" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">PDV Múltiple</h4>
										</div>
										<div class="modal-body">
											PDV <a href="pdf/Multiple.pdf" target="_blank"> <img src="images/PDF.jpg" width="40px"></a>

											<h3><b><?php if($leng=="Es"){echo "Características:";}else{echo "Characteristics:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Grasa elaborada a base de jabón de litio y aceites básicos refinados. Entre las                                             características
											principales de esta grasa se destacan: buena bombeabilidad, resistencia al barrido y arrastre
											por agua, buena estabilidad mecánica y resistencia a la oxidación; también propiedades de protección
											contra la formación de herrumbre y corrosión. Excede con los requisitos mínimos establecidos en la
											norma venezolana COVENIN 967/3 para grasas de servicio múltiple, que se utilizan en el campo automotor
											e industrial. Este producto posee el sello de calidad NORVEN.";}else{echo "
											Fat produced from lithium soap and refined base oils. Among the features
											main of this fat are: good pumpability , resistance and drag sweep
											water , good mechanical stability and resistance to oxidation ; also protective properties
											against the formation of rust and corrosion. Exceeds the minimum requirements of
											Venezuelan standard 967/3 COVENIN for multiple service fats , which are used in the automotive field
											and industrial . This product has the quality seal NORVEN .";}?></h5>

											<h3><b><?php if($leng=="Es"){echo "Usos:";}else{echo "Applications:";}?></b></h3>
											<h5 align="justify">
												<?php if($leng=="Es"){echo "Para la lubricación de mecanismos de equipos automotores e industriales tales                                            como: cojinetes planos y
											de rodamientos, motores eléctricos, bombas, generadores, cintas transportadoras y máquinas herramientas.
											También en cadenas, engranajes abiertos y en cualquier aplicación donde la temperatura operacional sea
											inferior a 150° C y no requieran grasas con características de extrema presión.";}else{echo "For lubrication                                             of mechanisms of automotive and industrial equipment such as plain bearings and
											bearings , electric motors, pumps, generators , conveyors and machine tools .
											Also in chains , open gears and in any application where the operating temperature is
											below 150 ° C and do not require fats with extreme pressure characteristics .";}?></h5>
											<br>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingTwo">
				<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<h3 style="text-align: center"><?php if($leng=="Es"){echo "Combustibles Marinos (Bunkers)";}else{echo "Marine Fuels (Bunkers)";}?></h3>
					</a>
				</h4>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				<div class="panel-body">
					<h3>Marine Gas Oil (MGO/DMA)</h3>
					<ul class="nav navbar-nav">
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal33">ISO 8217:2005 (Venezuela)</a>
							<div id="myModal33" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">ISO 8217:2005 (Venezuela)</h4>
										</div>
										<div class="modal-body">
											<p><h5>
												<?php if($leng=="Es"){echo "ISO 8217 2005 Estándar de Combustible, para combustibles destilados marinos.";}else{echo "
												ISO 8217 2005 Fuel Standard for marine distillate fuels.";}?>
											</h5>
											PDV <a href="pdf/ISO8217-MARINE.pdf" target="_blank"> <img src="images/PDF.jpg" width="40px"></a>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal34">ISO 8217:2005 (Colombia)</a>
							<div id="myModal34" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">ISO 8217:2005 (Colombia)</h4>
										</div>
										<div class="modal-body">
											<a href="pdf/ISO8217-MARINE.pdf" target="_blank"> <img src="images/PDF.jpg" width="40px"></a>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<br><br><br>

					<h3>Fuel Oil 380 (IFO 380/RMG 380)</h3>
					<ul class="nav navbar-nav">
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal35">ISO 8217:2005 (Venezuela)</a>
							<div id="myModal35" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">ISO 8217:2005 (Venezuela)</h4>
										</div>
										<div class="modal-body">
											<p>
												PDV <a href="pdf/ISO8217-FUEL.pdf" target="_blank"> <img src="images/PDF.jpg" width="40px"></a>
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal36">ISO 8217:2005 (Colombia)</a>
							<div id="myModal36" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">ISO 8217:2005 (Colombia)</h4>
										</div>
										<div class="modal-body">
											<p>
												PDV <a href="pdf/ISO8217-FUEL.pdf" target="_blank"> <img src="images/PDF.jpg" width="40px"></a>
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<br><br><br>

					<h3><?php if($leng=="Es"){echo "Otros IFO´s: Fuel Oil 180 (RME 180), Fuel Oil 80 (RMD 80), Fuel Oil 30 (RMB 30)";}else{echo "Others IFO´s: Fuel Oil 180 (RME 180), Fuel Oil 80 (RMD 80), Fuel Oil 30 (RMB 30)";}?></h3>
					<ul class="nav navbar-nav">
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal350">ISO 8217:2005 (Venezuela)</a>
							<div id="myModal350" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">ISO 8217:2005 (Venezuela)</h4>
										</div>
										<div class="modal-body">
											<p>
												PDV <a href="pdf/ISO8217-OTROS.pdf" target="_blank"> <img src="images/PDF.jpg" width="40px"></a>
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal360">ISO 8217:2005 (Colombia)</a>
							<div id="myModal360" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">ISO 8217:2005 (Colombia)</h4>
										</div>
										<div class="modal-body">
											PDV <a href="pdf/ISO8217-OTROS.pdf" target="_blank"> <img src="images/PDF.jpg" width="40px"></a>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<br><br><br>
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingThree">
				<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
					   href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						<h3 style="text-align: center"><?php if($leng=="Es"){echo "Servicios";}else{echo "Services";}?></h3>
					</a>
				</h4>
			</div>
		</div>
		<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			<div class="panel-body">
				<ul class="nav navbar-nav">
					<li>
						<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal38">Commodities</a>
						<div id="myModal38" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title"><?php if($leng=="Es"){echo "Materias Primas";}else{echo "Commodities";}?></h4>
									</div>
									<div class="modal-body">
										<p> <h5 align="justify">
											<?php if($leng=="Es"){echo "Suministro de los productos acabados para satisfacer las necesidades de la                                              operación de los puertos marítimos, su equipamiento y mantenimiento necesarios dentro de la misma.";}
											else{echo "Supply of finished products to meet the needs of the operation 	                                             of seaports, its equipment and maintenance required within the same";}?>
										</h5>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div></li>
					<li>
						<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal39">
							<?php if($leng=="Es"){echo "Asesoría y Soporte Operacional";}else{echo "Advice and Operational Support";}?></a>
						<div id="myModal39" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title"><?php if($leng=="Es"){echo "Asesoría y Soporte Operacional";}
											else{echo "Advice and Operational Support";}?></h4>
									</div>
									<div class="modal-body">
										<p><h5 align="justify">
											<?php if($leng=="Es"){echo "Contamos con personal con Experiencia en Operaciones en los distintos puertos                                             donde realizamos entregas de productos, lo que genera mayor confiabilidad y tranquilidad para nuestros                                              clientes.";}else{echo "We have staff experienced in operations in various ports where we make deliveries of                                              products, resulting in greater reliability and peace of mind for our customers.";}?>
										</h5>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div></li>
					<li>
						<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal40">
							<?php if($leng=="Es"){echo "Asesoría y Soporte Técnico";}else{echo "Advisory and Support";}?></a>
						<div id="myModal40" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title"><?php if($leng=="Es"){echo "Asesoría y Soporte Técnico";}else{echo "Advisory and Support";}?></h4>
									</div>
									<div class="modal-body">
										<p><h5 align="justify">
											<?php if($leng=="Es"){echo "Contamos con personal altamente calificado, el cual está a su disposición para                                                    analizar todas las dudas y consultas buscando soluciones rápidas y eficientes a todos los problemas                                                    técnicos que se puedan presentar en la comercialización de nuestros productos.";}else{echo "
												   We have highly qualified staff, which is available to discuss any questions and inquiries seeking fast                                                     and efficient to all the technical problems that may arise in the marketing of our product                                                      solutions.";}?></h5>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div></li>
					<li>
						<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal41">
							<?php if($leng=="Es"){echo "Análisis de Muestras de Lubricantes y Combustibles";}
							else{echo "Sample analysis of lubricants and fuels";}?></a>
						<div id="myModal41" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title"><?php if($leng=="Es"){echo "Análisis de Muestras de Lubricantes y Combustibles";}
											else{echo "Sample analysis of lubricants and fuels";}?></h4>
									</div>
									<div class="modal-body">
										<p><h5 align="justify">
											<?php if($leng=="Es"){echo "Ponemos a sus disposición análisis de aceites usados en los principales laboratorios de nuestros proveedores. Esta herramienta es fundamental para el monitoreo del comportamiento de cada equipo brindando datos fehacientes de:";}else{echo "
												We put at your disposal analysis used in leading laboratories of our suppliers oils. This tool is essential for monitoring the behavior of each team providing reliable data:";}?>
											<br><br>
											<ol type="A">
												<li><?php if($leng=="Es"){echo "Estado de equipo.";}else{echo "State team.";}?>
												<li><?php if($leng=="Es"){echo "Estado del lubricante.";}else{echo "
													State of the lubricant.";}?>
												<li><?php if($leng=="Es"){echo "Grado de contaminación.";}else{echo "Degree of contamination.";}?>
											</ol><br>
											<?php if($leng=="Es"){echo "A través de un programa de muestreos periódicos y procedimientos de control de reportes, se podrán delinear tendencia de comportamiento de cada equipo conformando un programa de mantenimiento predictivo que minimice las fallas optimizando la vida útil del lubricante entre otros beneficios.";}else{echo "
												Through a program of regular sampling and reporting control procedures, they may delineate trend behavior of each team forming a predictive maintenance program to minimize failures optimizing lubricant life among other benefits.";}?>
										</h5>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div></li>
					<li>
						<a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#myModal42">
							<?php if($leng=="Es"){echo "Plan de Lubricación";}else{echo "Lubrication Plan";}?></a>
						<div id="myModal42" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title"><?php if($leng=="Es"){echo "Plan de Lubricación";}else{echo "Lubrication Plan";}?></h4>
									</div>
									<div class="modal-body">
										<p><h5 align="justify">
											<?php if($leng=="Es"){echo "La experiencia recogida por nuestra empresa en conjunto con nuestros proveedores,                          a lo largo de tantos años de investigación y desarrollo, nos permiten realizar una exacta selección del aceite lubricante que brinde un óptimo                                rendimiento técnico en cada equipo reduciendo los costos de operación.
												Implementar esta selección es parte de nuestro Plan de Lubricación, el mismo consta de:";}else{echo "
												The experience gathered by our company together with our suppliers over many years of research and development, allow us to make an accurate selection of the lubricating oil to provide optimal performance on each computer technician reducing operating costs.
												Implementing this selection is part of our Plan Lubrication, it consists of:";}?>
											<br><br>
											<ul type="disk">
												<li><?php if($leng=="Es"){echo "Inspección de equipos e instalaciones.";}else{echo "
													Inspection of equipment and facilities.";}?>
												<li><?php if($leng=="Es"){echo "Relevamiento de datos y condiciones.";}else{echo "
													Survey data and conditions.";}?>
												<li><?php if($leng=="Es"){echo "Intecambio de conocimientos.";}else{echo "Interchange of knowledge.";}?>
												<li><?php if($leng=="Es"){echo "Análisis crítico.";}else{echo "Critical analysis.";}?>
												<li><?php if($leng=="Es"){echo "Realización de una Guía de Lubricación.";}else{echo "Making a Lubrication Guide.";}?>
												<li><?php if($leng=="Es"){echo "Propuesta técnico-comercial.";}else{echo "
													technical and commercial proposal.";}?>
												<li><?php if($leng=="Es"){echo "Puesta en marcha.";}else{echo "
													Start up.";}?>
												<li><?php if($leng=="Es"){echo "Monitoreo del resultado.";}else{echo "
													Monitoring results.";}?>
											</ul></h5>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<?php include 'footer.php';?>
		<?php include 'include_js.php';?>

		<script type="text/javascript">
			$(document).ready(function () {
				$(".menu_producto > a").css({"color":'#FFFFFF', "background-color":'#428bca',"font-weight":'Bold' });
			});
		</script>
</body>
</html>