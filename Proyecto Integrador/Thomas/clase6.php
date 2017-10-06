<!DOCTYPE HTML>
<html>
<head>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<style type="text/css">
	body { padding-top: 70px; }
</style>
<body>

	<div class="container">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
			</div>
		</nav>
		<div class="row">
			<div class="col-xs-offset-3 col-xs-6">
				<form action="confirmacion.php" method="POST" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?php if ( isset($_POST['email']) ){ echo $_POST['email']; }?>">
				  </div>
				  <div class="form-group">
				    <label for="edad">Edad</label>
				    <input value="<?php if ( isset($_POST['edad']) ){ echo $_POST['edad']; }?>" name="edad" type="text" class="form-control" id="edad" placeholder="Cuentanos cuantos años tienes">
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" id="password" placeholder="Password">
				  </div>

				  <!-- Subida de CV !-->
				  <div class="form-group">
				    <label for="cv">C.V:</label>
				    <input type="file" accept=".txt" class="form-control" id="cv" placeholder="Subi tu curriculum">
				  </div>
				  <!---->

				  <div class="checkbox">
				    <label>
				      <input name="soul_sale" type="checkbox"> Vendo mi alma a este sitio
				    </label>
				  </div>
				  <div class="checkbox">
				    <label>
				      <input name="edad_mayor" type="checkbox"> Acepto que soy mayor de edad
				    </label>
				  </div>
				  <button type="submit" class="btn btn-default">Registrarme</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
