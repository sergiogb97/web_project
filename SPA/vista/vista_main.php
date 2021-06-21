<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Smartphones</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="js/comunes.js"></script>
		<script src="js/eventos.js"></script>
		<script>
			$( function() {
				var ref = "<?php echo $ref; ?>";
				switch ( ref ) {
					case "tree":
						getBodyTree();
					break;
					case "search":
					break;
					case "list":
					break;
					case "admin":
					break;
					default:
						getBodyMain();
					break;
				}
			} );
		</script>
	</head>
	<body>
		<header>
			<?php
				echo $header_links;
			?>
		</header>
	</body>
</html>
