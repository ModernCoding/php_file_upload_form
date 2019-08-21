<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<title>File upload form</title>
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/app.css">
	</head>


	<body>

		<div class="container">
			<div class="card">
				<div class="card-header text-center h1">Your face, your name, your number</div>
				
				<div class="card-body">

					<form action="upload.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="file">Your face:</label>
							<input type="file" name="file" id="file" class="form-control">
						</div>
					
						<div class="form-group">
							<label for="name">Your name:</label>
							<input type="text" name="name" id="name" class="form-control">
						</div>
						
						<div class="form-group">
							<label for="tel">Your number:</label>
							<input type="tel" name="tel" id="tel" class="form-control">
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				
				</div>
			</div>
		</div>
		
	</body>

</html>