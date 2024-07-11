<!DOCTYPE html>
<html>
	<head>
		<title>Photo Gallery</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<style>
			.thumbnail img{
				width: 350px;
				height: 250px;
			}
			
			.item img{
				width: 1000px;
				height: 1000px;
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
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="carousel slide" data-ride="carousel" id="slider">
					<ol class="carousel-indicators">
						<li data-target="#slider" data-slide-to="0" class="active"></li>
						<li data-target="#slider" data-slide-to="1"></li>
						<li data-target="#slider" data-slide-to="2"></li>
						<li data-target="#slider" data-slide-to="3"></li>
					</ol>
				
					<div class="carousel-inner">
						<div class="item active">
							<img src="pics/pic1.jpg"/>
						</div>
						<div class="item">
							<img src="pics/pic2.jpg"/>
						</div>
						<div class="item">
							<img src="pics/pic3.jpg"/>
						</div>
						<div class="item">
							<img src="pics/pic4.jpg"/>
						</div>
					</div>
					
					<a class="left carousel-control" href="#slider" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>

					<a class="right carousel-control" href="#slider" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
			
		<div class="page-header">
			<h3>Photo Gallery</h3>
		</div>
		
		<div class="row">
			<div class="col-md-4"> 
				<a href="#m1" data-toggle="modal" class="thumbnail">
					<img src="pics/pic1.jpg">
				</a>
				
				<div class="modal fade" id="m1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">Kitten 1</div>
							<div class="modal-body">
								<img src="pics/pic1.jpg" class="img-thumbnail">
							</div>
							<div class="modal-footer">This is my kitten1.</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-md-4"> 
				<a href="#m2" data-toggle="modal" class="thumbnail">
					<img src="pics/pic2.jpg">
				</a>
				
				<div class="modal fade" id="m2">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">Kitten 2</div>
							<div class="modal-body">
								<img src="pics/pic2.jpg" class="img-thumbnail">
							</div>
							<div class="modal-footer">This is my kitten2.</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-md-4"> 
				<a href="#m3" data-toggle="modal" class="thumbnail">
					<img src="pics/pic3.jpg">
				</a>
				
				<div class="modal fade" id="m3">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">Kitten 3</div>
							<div class="modal-body">
								<img src="pics/pic3.jpg" class="img-thumbnail">
							</div>
							<div class="modal-footer">This is my kitten3.</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-md-4"> 
				<a href="#m4" data-toggle="modal" class="thumbnail">
					<img src="pics/pic4.jpg">
				</a>
				
				<div class="modal fade" id="m4">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">Kitten 4</div>
							<div class="modal-body">
								<img src="pics/pic4.jpg" class="img-thumbnail">
							</div>
							<div class="modal-footer">This is my kitten4.</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-md-4"> 
				<a href="#m5" data-toggle="modal" class="thumbnail">
					<img src="pics/pic5.jpg">
				</a>
				
				<div class="modal fade" id="m5">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">Kitten 5</div>
							<div class="modal-body">
								<img src="pics/pic5.jpg" class="img-thumbnail">
							</div>
							<div class="modal-footer">This is my kitten5.</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-md-4"> 
				<a href="#m6" data-toggle="modal" class="thumbnail">
					<img src="pics/pic6.jpg">
				</a>
				
				<div class="modal fade" id="m6">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">Kitten 6</div>
							<div class="modal-body">
								<img src="pics/pic6.jpg" class="img-thumbnail">
							</div>
							<div class="modal-footer">This is my kitten6.</div>
						</div>
					</div>
				</div>
				
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