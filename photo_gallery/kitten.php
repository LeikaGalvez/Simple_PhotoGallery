<!DOCTYPE html>
<html>
	<head>
		<title>Photo Gallery</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/lightbox.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/lightbox.js"></script>
		<style>
			.thumbnail img{
				width: 350px;
				height: 250px;
			}

			
		</style>
	</head>
	<body style="background-color: #fffde3">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-brand">Photo Gallery</div>
				</div>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
				<li><a href="kitten.php">Kitten Gallery</a></li>
				<li><a href="others.php">Others</a></li>
			</ul>
			</div>
		</nav>
		
		<div class="container">
			
		<div class="page-header">
			<h3>Kitten Gallery</h3>
		</div>
		
		<div class="row">
			<div class="col-md-4"> 
				<a href="pics/pic1.jpg" data-lightbox="gallery" data-title="My Kitten 1" class="thumbnail">
					<img src="pics/pic1.jpg">
				</a>
				
				
				
			</div>
			<div class="col-md-4"> 
				<a href="pics/pic2.jpg" data-lightbox="gallery" data-title="My Kitten 2" class="thumbnail">
					<img src="pics/pic2.jpg">
				</a>
				
				
				
			</div>
			<div class="col-md-4"> 
				<a href="pics/pic3.jpg" data-lightbox="gallery" data-title="My Kitten 3" class="thumbnail">
					<img src="pics/pic3.jpg">
				</a>
				
				
				
			</div>
			<div class="col-md-4"> 
				<a href="pics/pic4.jpg" data-lightbox="gallery" data-title="My Kitten 4" class="thumbnail">
					<img src="pics/pic4.jpg">
				</a>
				
				
				
			</div>
			<div class="col-md-4"> 
				<a href="pics/pic5.jpg" data-lightbox="gallery" data-title="My Kitten 5" class="thumbnail">
					<img src="pics/pic5.jpg">
				</a>
				
				
				
			</div>
			<div class="col-md-4"> 
				<a href="pics/pic6.jpg" data-lightbox="gallery" data-title="My Kitten 6" class="thumbnail">
					<img src="pics/pic6.jpg">
				</a>
				
				
				
			</div>
		</div>
			<footer class="navbar navbar-default navbar-fixed-bottom">
				<div class="container">
					<p class="text-center" style="padding: 10px;">Created by: Leika Anne Galvez</p>
				</div>
			</footer>
		</div>
	
	</body>
</html>