<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home page</title>
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

Welcome to MedList – Your hub for medicine info spanning Allopathy, Homeopathy, and Ayurveda. Explore, learn, and empower your health journey with us.
			</p>
		</div>

		<?php
			show_specific_medicines("all");
		?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>


