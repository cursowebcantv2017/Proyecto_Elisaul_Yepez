<?php 
    $var=$_GET["code"];
    
  ?>


<!--Barra de navegación-->
<div style="margin-top:30px">
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

					<li><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>

      				<li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>

      				<li><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>

      				<li><a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></li>

       			</ul>

    		</div>

		</div>

		<!--Banner Sushi-->
		
		<!--Banner Sushi-->
		<div>

      <img src="imagenes-cortadas/foto-inicio/logo.png">

      <br>

      <div class="container-fluid">
            <table width="100%">
              <tr>
                <td style="font-size: 20px" align="left"><b>&copy2015 Sushi Restaurant</b></td>

                <td align="center" width="43%">Sushi Restaurant is proudly powered by Bootstrap Entries (RSS) and Comments (RSS) Privacy Policy</td>
              </tr>
            </table>
        
      </div>

    </div>
	
	</nav>

</div>
<!--Barra de navegación-->