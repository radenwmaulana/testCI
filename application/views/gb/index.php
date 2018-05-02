<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Guestbook</title>
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
		<div class="col-lg-12 text-center">
			<h1 class="mt-5">Guestbook</h1>
			<p class="lead">Selamat datang di buku tamu online</p>
			<br>
			<ul class="list-unstyled">
				<table border="1" width="100%" align="center">
				<thead>
					<td width="5%">No</td>
					<td width="10%">Date</td>
					<td width="12%">Name</td>
					<td width="12%">E-Mail</td>
					<td width="15%">Subject</td>
					<td width="18%">Message</td>
					<td width="8%">Act</td>
				</thead>
				<?php foreach ($kontak->result_array() as $key): ?>
				<tbody>
					<td><?php echo $key['contactID'] ?></td>
					<td><?php echo $key['contactDate'] ?></td>
					<td><?php echo $key['contactName'] ?></td>
					<td><?php echo $key['contactEmail'] ?></td>
					<td><?php echo $key['contactSubject'] ?></td>
					<td><?php echo $key['contactMessage'] ?></td>
					<td><a href="<?php echo base_url() ?>gb/edit/<?php echo $key['contactID'] ?>">Edit</a> | <a href="<?php echo base_url() ?>gb/delete/<?php echo $key['contactID'] ?>" title="Delete" onclick="return delcheck();">Delete</a></td>
				</tbody>
				<?php endforeach ?>
				</table>
			</ul>
		</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>