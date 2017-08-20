<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/custom.css" rel="stylesheet">
	
	<title>Contacto</title>

	<?php include('bannersuperior.php');?>

</head>

<body style="background-color:#EDEDED;">

	<div class="container">

		<img style="margin-top:30px" width="100%" src="imagenes-cortadas/contacto/mapa.jpg">

	</div>

<div class="container" style="background-color:white; margin-top:20px;">

<br>

	<table class="tabla2" width="100%">

		<tr>

			<td align="center">

				<form class="form-inline">

					<div class="form-group">

    					<label for="exampleInputName2">Nombre</label>
    					<input type="text" class="form-control" id="exampleInputName2" placeholder="Elisaul Yepez">

  					</div>

 				</form>

			</td>

			<td align="center">
		
				<form class="form-inline">

					<div class="form-group">

    					<label for="exampleInputEmail3">Correo</label>
    					<input type="email" class="form-control" id="exampleInputEmail3" placeholder="elisaul@example.com">

  					</div>

 				</form>

			</td>

			<td align="center">
		
				<form class="form-inline">

					<div class="form-group">

    					<label for="exampleInputName2">Teléfono</label>
    					<input type="text" class="form-control" id="exampleInputName2" placeholder="2121112233">
  				
  					</div>

 				</form>

			</td>

		</tr>
	
	</table>

	<table class="tabla2" width="100%">

		<tr>

			<td align="left">

				<div class="form-inline">

					<div class="form-group">

  						<label for="comment">Mensaje</label>
						<textarea class="form-control" rows="5" id="comment" placeholder="Escriba aquí"></textarea>
					
					</div> 

				</div>

			</td>

		</tr>

	</table>

	<div align="right" style="margin-bottom:20px"><a class="btn btn-default" href="#" role="button">Enviar</a></div>

</div>

<?php include('bannerinferior.php');?>

</body>

</html>