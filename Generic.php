<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Generic page</title>
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

Generic medicines are cost-effective alternatives to brand-name drugs, containing the same active ingredients, ensuring equivalent efficacy and safety. Once the patent for a brand-name medication expires, generic versions become available, offering affordability and expanding healthcare access. Regulatory approval ensures their quality and bioequivalence.
			</p>
		</div>

		<?php
			show_specific_medicines("Generic");
		?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>

?>
