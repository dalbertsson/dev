<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<style type="text/css">
		
	.item {
		float: left;
		width: 150px;
		margin: 0px 3px 3px 3px;
		position: relative;
	}
	.item img { max-width: 100%; height: auto; margin: 0;}
	.overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none;}


	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script src="js/masonry.js"></script>
	
	<script>
		$(document).ready(function() {
		
			var $container = $('#container');

			$container.imagesLoaded( function(){
			  $container.masonry({
			    itemSelector : '.item',
				isAnimated: true
			  });
			});

			$('.item').hover(function() {
				$(this).find('.overlay').fadeIn(150);
			}, function() {
				$(this).find('.overlay').fadeOut(150);
			})

		});
	</script>
</head>
<body style="padding: 50px; font-size: 14px; font-family: Helvetica, Arial, sans-serif; color: #555;background: #eee;">
	<div id="container">
	<?php

	for($x=0; $x<20; $x++) {
		
		$w = mt_rand(150, 450);
		$h = mt_rand(150, 450);
		
		echo '<div class="item">';
			echo '<div class="overlay"></div>';
			echo '<img src="http://placekitten.com/' . $w . '/' . $h . '"></div>';
	}

	?>
	</div>
</body>
</html>