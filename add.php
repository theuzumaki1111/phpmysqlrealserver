<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<h2>Add Data</h2>
		<p>
			<a href="index.php" class="btn btn-primary">Home</a>
		</p>

		<form action="addAction.php" method="post" name="add">
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label for="name" class="form-label">Name</label>
						<input type="text" class="form-control" id="name" name="name">
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label for="age" class="form-label">Age</label>
						<input type="text" class="form-control" id="age" name="age">
					</div>
				</div>
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email</label>
				<input type="text" class="form-control" id="email" name="email">
			</div>
			<button type="submit" class="btn btn-primary" name="submit">Add</button>
		</form>
	</div>

	<!-- Include Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
