
<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Allopathy page</title>
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
Allopathy, also known as conventional or Western medicine, is a mainstream medical approach that employs evidence-based practices and pharmaceutical interventions to diagnose, prevent, and treat diseases. Allopathic treatments typically target specific symptoms or causes, aiming to alleviate or eliminate health issues through surgery, medications, and other interventions
			</p>
		</div>

		<?php
			show_specific_medicines("Allopathy");
		?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>

?>
