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
			<h3>Meme Gallery</h3>
		</div>
		
		<div class="row">
			<div class="col-md-4"> 
				<a href="pics/memes/meme1.jpg" data-lightbox="gallery" data-title="My Meme 1" class="thumbnail">
					<img src="pics/memes/meme1.jpg">
				</a>
				
				
				
			</div>
			<div class="col-md-4"> 
				<a href="pics/memes/meme2.jpg" data-lightbox="gallery" data-title="My Meme 2" class="thumbnail">
					<img src="pics/memes/meme2.jpg">
				</a>
				
				
				
			</div>
			<div class="col-md-4"> 
				<a href="pics/memes/meme3.jpg" data-lightbox="gallery" data-title="My Meme 3" class="thumbnail">
					<img src="pics/memes/meme3.jpg">
				</a>
				
				
				
			</div>
			<div class="col-md-4"> 
				<a href="pics/memes/meme4.jpg" data-lightbox="gallery" data-title="My Meme 4" class="thumbnail">
					<img src="pics/memes/meme4.jpg">
				</a>
				
				
				
			</div>
			<div class="col-md-4"> 
				<a href="pics/memes/meme5.jpg" data-lightbox="gallery" data-title="My Meme 5" class="thumbnail">
					<img src="pics/memes/meme5.jpg">
				</a>
				
				
				
			</div>
			<div class="col-md-4"> 
				<a href="pics/memes/meme6.jpg" data-lightbox="gallery" data-title="My Meme 6" class="thumbnail">
					<img src="pics/memes/meme6.jpg">
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