	<?php 
		$var=$_GET["code"];
		
	?>
<!--Banner superior-->
<div class="bg-primary">

	<center><img src="imagenes-cortadas/foto-inicio/logo.png" class="img-responsive" alt="Responsive image"></center>

</div>
<!--Banner superior-->

<!--Barra de navegación-->
<div>
	<nav class="navbar navbar-default  navbar-default-top navbar-form">

  		<div class="container-fluid">

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
      
      			<ul class="nav navbar-nav navbar-left">

      				<li <?php if($var=="i"){ ?> class="active" <?php } ?> ><a href="index.php?code=i"><b>Inicio</b></a></li>

      				<li <?php if($var=="q"){ ?> class="active" <?php } ?> ><a href="quienesomos.php?code=q"><b>¿Quiénes Somos?</b></a></li>

      				<li <?php if($var=="p"){ ?> class="active" <?php } ?> ><a href="productos.php?code=p"><b>Productos</b></a></li>

      				<li <?php if($var=="s"){ ?> class="active" <?php } ?> ><a href="servicios.php?code=s"><b>Servicios</b></a></li>

      				<li <?php if($var=="c"){ ?> class="active" <?php } ?> ><a href="contacto.php?code=c"><b>Contacto</b></a></li>

       			</ul>

				<ul class="nav navbar-nav navbar-right">

					<li><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>

      				<li><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>

      				<li><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>

      				<li><a href="#"><i class="fa fa-youtube fa-lg" aria-hidden="true"></i></a></li>

       			</ul>

    		</div>

		</div>

		<!--Banner Sushi-->
		
		<!--Banner Sushi-->
		
	
	</nav>

</div>
<!--Barra de navegación-->


<!--Banner Sushi-->
<div>

	<img width="100%" src="imagenes-cortadas/foto-inicio/foto-carrusel.jpg">
		
</div>
<!--Banner Sushi-->