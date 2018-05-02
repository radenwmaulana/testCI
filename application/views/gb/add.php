<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Add | Guestbook</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			padding-top: 54px;
		}
		@media (min-width: 992px) {
		body {
			padding-top: 56px;
			}
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="#">Guestbook</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="add">Tambah Data</a>
				</li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
		<div class="col-lg-12">
			<h1 class="mt-5">Guestbook</h1>
			<p class="lead">Tambah Data</p>
			<form method="post">
			<fieldset>
				<form method="post" action="add.php">
			<fieldset>
				<div>
					<label>Name</label><br>
					<input name="contactName" type="text" id="contactName" size="52" value="" required>
				</div>
				<div>
					<label>E-Mail</label><br>
					<input name="contactEmail" type="email" id="contactEmail" size="52" value="" required>
				</div>
				<div>
					<label>Subject</label><br>
					<input name="contactSubject" type="text" id="contactSubject" size="52" value="">
				</div>
				<div>
					<label>Messages</label><br>
					<textarea name="contactMessage" id="contactMessage" rows="5" cols="50" required></textarea>
				</div>
				<div><br>
					<input type="submit" name="submit" value="Send" onclick="return thanks()">
					<input type="reset" name="reset" value="Reset">
				</div>
			</fieldset>
			</form>
			</fieldset>
			</form>
		</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>