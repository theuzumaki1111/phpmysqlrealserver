<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<h2>Edit Data</h2>
		<p>
			<a href="index.php" class="btn btn-primary">Home</a>
		</p>

		<form name="edit" method="post" action="editAction.php">
			<div class="mb-3">
				<label for="name" class="form-label">Name</label>
				<input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
			</div>
			<div class="mb-3">
				<label for="age" class="form-label">Age</label>
				<input type="text" class="form-control" name="age" value="<?php echo $age; ?>">
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email</label>
				<input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
			</div>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<button type="submit" class="btn btn-primary" name="update">Update</button>
		</form>
	</div>

	<!-- Include Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
