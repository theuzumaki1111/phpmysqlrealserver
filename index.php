<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (latest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<!-- Include SweetAlert CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
</head>

<body>
	<div class="container">
		<h2>Homepage</h2>
		<p>
			<a href="add.php" class="btn btn-primary">Add New Data</a>
		</p>
		<table class="table">
			<thead class="bg-light">
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Fetch the next row of a result set as an associative array
				while ($res = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$res['name']."</td>";
					echo "<td>".$res['age']."</td>";
					echo "<td>".$res['email']."</td>";	
					echo "<td>
							<a href=\"edit.php?id=$res[id]\" class=\"btn btn-primary btn-sm\">Edit</a>
							<a href=\"delete.php?id=$res[id]\" class=\"btn btn-danger btn-sm\" onClick=\"deleteConfirmation(event, $res[id])\">Delete</a>
						  </td>";
					echo "</tr>";
				}
				?>
			</tbody>
		</table>
	</div>

	<!-- Include Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<!-- Include SweetAlert JS -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>

	<script>
		// Function to handle delete confirmation with SweetAlert
		function deleteConfirmation(event, id) {
			event.preventDefault();

			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#d33',
				cancelButtonColor: '#3085d6',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.isConfirmed) {
					// If confirmed, redirect to the delete.php with the id parameter
					window.location.href = 'delete.php?id=' + id;
				}
			});
		}
	</script>
</body>
</html>
