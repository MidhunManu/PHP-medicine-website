<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Homeo page</title>
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
Homeopathy is a holistic medical system that believes in the principle "like cures like." It uses highly diluted substances to stimulate the body's natural healing processes. Homeopathic medicines, known as remedies, aim to treat the entire person, addressing physical, mental, and emotional aspects to promote overall well-being.
			</p>
		</div>

		<?php
			show_specific_medicines("Homeopathy");
		?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>


