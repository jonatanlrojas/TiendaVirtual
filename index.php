<?php

 include('php/conexion.php');
 $registros=mysql_query("select * from categorias order by categoria asc");
 cerrarconexion();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<title>Tienda Online</title>
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/normalizar.css">
<link rel="stylesheet" href="css/hover-min.css">

<!-- bootstrap-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="javascript/bootstrap.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- bootstrap-->



<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="CSS3 Menu_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />

	<!-- End WOWSlider.com HEAD section -->


</head>

<body>
<header>
<div class="cabecera"></div>
<nav>
<!-- Start css3menu.com BODY section -->
<input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">
<ul id="css3menu1" class="topmenu">
	<li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
	<li class="topfirst"><a class="pressed" href="#" style="width:219px;height:58px;line-height:58px;"><img src="CSS3 Menu_files/css3menu1/home1.png" alt=""/>INICIO</a></li>
	<li class="topmenu"><a href="#" style="width:225px;height:66px;line-height:66px;"><span>PRODUCTOS</span></a>
	<ul>
    <?php
	while ($fila=mysql_fetch_array($registros)){
	?>

		<li><a href="#"><?php echo $fila['categoria'];?></a></li>
	<?php } ?>

	</ul></li>
	<li class="topmenu"><a href="#" style="width:238px;height:66px;line-height:66px;"><img src="CSS3 Menu_files/css3menu1/contact.png" alt=""/>CONTACTO</a></li>
	<li class="toplast"><a href="#" style="height:66px;line-height:66px;"><span><img src="CSS3 Menu_files/css3menu1/register.png" alt=""/>ZONA PRIVADA</span></a>
	<ul>
		<li class="subfirst"><a href="#">INICIAR SESIÓN</a></li>
		<li><a href="#">REGISTRARSE</a></li>
	</ul></li>
</ul><p class="_css3m"><a href="http://css3menu.com/">menu html5</a> by Css3Menu.com</p>
<!-- End css3menu.com BODY section -->


</nav>
<div class="slider">
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/lasmejoresofertas.jpg" alt="Las-mejores-ofertas" title="Las-mejores-ofertas" id="wows1_0"/></li>
		<li><img src="data1/images/transporte.jpg" alt="Transporte" title="Transporte" id="wows1_1"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Las-mejores-ofertas"><span><img src="data1/tooltips/lasmejoresofertas.jpg" alt="Las-mejores-ofertas"/>1</span></a>
		<a href="#" title="Transporte"><span><img src="data1/tooltips/transporte.jpg" alt="Transporte"/>2</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">http://wowslider.com/</a> by WOWSlider.com v8.5</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
    
</div>


</header>
<div class="main">
<div class="productosmain hvr-buzz-out"><img src="imagenes/portatil1.jpg" width="100%" alt="portatil1"><div class="precio">PRECIO</div></div>
<div class="productosmain hvr-buzz-out"><img src="imagenes/portatil1.jpg" width="100%" alt="portatil1"><div class="precio">PRECIO</div></div>
<div class="productosmain hvr-buzz-out"><img src="imagenes/portatil1.jpg" width="100%" alt="portatil1"><div class="precio">PRECIO</div></div>
<div class="productosmain hvr-buzz-out"><img src="imagenes/portatil1.jpg" width="100%" alt="portatil1"><div class="precio">PRECIO</div></div>
<div class="productosmain hvr-buzz-out"><img src="imagenes/portatil1.jpg" width="100%" alt="portatil1"><div class="precio">PRECIO</div></div>
<div class="productosmain hvr-buzz-out"><img src="imagenes/portatil1.jpg" width="100%" alt="portatil1"><div class="precio">PRECIO</div></div>
<div class="productosmain hvr-buzz-out"><img src="imagenes/portatil1.jpg" width="100%" alt="portatil1"><div class="precio">PRECIO</div></div>
<div class="productosmain hvr-buzz-out"><img src="imagenes/portatil1.jpg" width="100%" alt="portatil1"><div class="precio">PRECIO</div></div>
<div class="productosmain hvr-buzz-out"><img src="imagenes/portatil1.jpg" width="100%" alt="portatil1"><div class="precio">PRECIO</div></div>
<div class="productosmain hvr-buzz-out"><img src="imagenes/portatil1.jpg" width="100%" alt="portatil1"><div class="precio">PRECIO</div></div>
<div class="productosmain hvr-buzz-out"><img src="imagenes/portatil1.jpg" width="100%" alt="portatil1"><div class="precio">PRECIO</div></div>
<div class="productosmain hvr-buzz-out"><img src="imagenes/portatil1.jpg" width="100%" alt="portatil1"><div class="precio">PRECIO</div></div>

<div class="limpiar"></div>

</div>
<footer><p>Todos los derechos reservados.</p></footer>
</html>
