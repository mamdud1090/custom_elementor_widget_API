<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Taking Random Images</title>


	<style type="text/css">
		
		.imageDiv{
			float: left;
			width: 25%;
		}

		.splashImage{
			width: 100%;
			border: 2px solid gray;
		}
	</style>
</head>
<body>


	<?php 

	$count = 0;

	for ($i=0; $i < 12; $i++) {

	$count++;
		
		?>

		<!-- <img src="https://source.unsplash.com/collection/190727
		" height="200px" width="200px"> -->

		<div class="imageDiv">
		<img class="splashImage" src="<?php echo 'https://source.unsplash.com/collection/'.$count.''?> " alt="random-image" height="200px" width="200px">
	</div>


 <?php 
	}

	?>

	<!-- <div class="imageDiv">
		<img src="<?php echo 'https://source.unsplash.com/collection/'.$count.''?> " alt="random-image" height="200px" width="200px">
	</div> -->


</body>
</html>