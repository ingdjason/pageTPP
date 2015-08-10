<!DOCTYPE html>
<html>
	<head>
		<title>Lye touristik lakay</title>
		
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
		<script src="js/prototype.js" type="text/javascript"></script>
		<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
		<script src="js/lightbox.js" type="text/javascript"></script>
	</head>
	
	<body>
		<div id="content">
			<div id="banniere">
				<!--<img src="images/teamBaC.jpg" title="test" style="border:1px solid gray;" width="100%" height="200" alt="logo" /> -->
			</div>
			
			<div id="corp">
				// <h1> Galerie d'images: </h1><br /><hr/><br />
				
				<?php
				$dossier= "Sites/";
				$ouverture = opendir($dossier);
				
				while($photo = readdir($ouverture))
				{
					if(!is_dir($dossier.$photo) && $photo != "." && $photo != "..")
					{
						echo '<a rel="lightbox" href="'.$dossier.$photo.'">';
							echo '<img  width="250" height="250"  src="'.$dossier.$photo.'" title="'.$photo.'" alt="image" id="img" />';
							echo '</a>';
					}
				}
				closedir($ouverture);
				?>
			</div>
		</div>
	</body>