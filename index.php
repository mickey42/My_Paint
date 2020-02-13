<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My paint</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link rel="stylesheet" href="css/style.css">

</head>
<body> 
	<!-- [DEBUT] BARRE DE NAVIGATION -->
	<div class="navbar">

		<!-- LOGO MY PAINT LIKE -->
		<img class="icon-app"src="img/paint.png" alt="icone">

		<!-- NOUVEAU FICHIER -->
		<label>
			<input type="button" onclick="reset()">
			<img class="icon" src="img/new_file.png">
		</label>

		<!-- EDITION FICHIER -->
		<label>
			<input type="file" id="save_image" name="open_img">
			<a id="ouvrir"></a>  
			<img class="icon" src="img/openfile.png">
		</label>  

		<!-- SAUVEGARDE FICHIER -->
		<label>
			<input type="button" onclick="saveImg()">
			<img class="icon" src="img/save.png">
		</label>  

		<!-- CRAYON -->
		<label>
			<input type="radio" name="option" value="crayon">
			<img class="icon" src="img/crayon.png">
		</label>

		<!-- LIGNE -->
		<label>
			<input type="radio" name="option" value="ligne">
			<img class="icon" src="img/ligne.png">
		</label>

		<!-- RECTANGLE-->
		<label>
			<input type="radio" name="option" value="rect">
			<img class="icon" src="img/rectangle.png">
		</label>

		<!-- RECTANGLE REMPLI -->
		<label>
			<input type="radio" name="option" value="rect_fill">
			<img class="icon" src="img/rectangle_filled.png">
		</label>

		<!-- CERCLE -->
		<label>
			<input type="radio" name="option" value="cercle">
			<img class="icon" src="img/cercle.png">
		</label>

		<!-- CERCLE REMPLI -->
		<label>
			<input type="radio" name="option" value="cercle_fill">
			<img class="icon" src="img/cercle_filled.png">
		</label>

		<!-- GOMME -->
		<label>
			<input type="radio" name="option" value="gomme">
			<img class="icon" src="img/gomme.png">
		</label>

		<!-- PALETTES DE COULEUR -->
		<div class="color-container">
			<label>
				Couleur primaire
				<input type="color" name="color" id="colorPicker" />
			</label>
			<label>
				Couleur contour
				<input type="color" name="color" id="outlinePicker" />
			</label>
		</div>

		<!-- EPAISSEUR -->
		<div class="epaisseur-container">
			<select id="epaisseur">
				<option value="">Epaisseur</option>
				<option value="1">1</option>
				<?php for ($i=2; $i <= 20; $i = $i +2): ?>
					<option value="<?= $i ?>"><?= $i ?></option>
				<?php endfor; ?>
			</select>   

		</div>

		<a id="link"></a>
	</div>
	<!-- [FIN] BARRE DE NAVIGATION -->

	<!-- CANVAS -->
	<div class="canvas">
		<canvas id="myCanvas" width="1768" height="690">
		</canvas>
	</div>
	<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="js/mypaint.js" type="text/javascript"></script>
</body>
</html>