
<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ayurveda page</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	</head>
	<style>
		p {
			text-align: center;
		}
	</style>
	<body>
		<?php
		require "navbar.php";
		?>
	
		<div>
			<p>
Ayurveda, an ancient holistic healing system, originated in India. It harmonizes mind, body, and spirit to prevent and treat ailments. Ayurvedic medicine employs natural remedies, personalized diets, and lifestyle adjustments, focusing on balance and individual constitution (dosha) for optimal health and well-being.
			</p>
		</div>

		<?php
			show_specific_medicines("Ayurveda");
		?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>

