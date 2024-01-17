<?php
$host = "127.0.0.1";
$port = "5432";
$dbname = "meds";
$user = "postgres";
$password = "your password";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

function show_specific_medicines($kind) {
	global $conn;
	$query = "";
	if($kind === "all") {
		$query = "select * from medicines";	
	} 
	else {
		$query = "select * from medicines where medicine_type='$kind'";	
	}
	$res = pg_query($conn, $query);

	if(!$res) {
		die("err in sql query " . pg_last_error($conn));
	}


	while($row = pg_fetch_assoc($res)) {
		echo '<div style="margin-left: 500px" class="col-md-4 mb-4">';
		echo '<div style="text-align: center" class="card">';
		echo '<div class="card-body">';
		echo '<h5 class="card-title">' . $row['medicine_name'] . '</h5>';
		echo '<p class="card-text"><strong>Type:</strong> ' . $row['medicine_type'] . '</p>';
		echo '<p class="card-text"><strong>Description:</strong> ' . $row['medicine_desc'] . '</p>';
		echo '<p class="card-text"><strong>Price:</strong> &#x20B9;' . $row['medicine_price'] . '</p>';
		echo '<a target="_blank" href="https://en.wikipedia.org/wiki/'.$row['medicine_name'] . '">more info</a>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
}

?>

