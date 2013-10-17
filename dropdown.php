<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<style type="text/css">
		ul { list-style: none; width: 150px; margin: 0; padding: 0; box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);}
		li { display: block; padding: 10px; background: #FFF; color: #333; position: relative; border-bottom: 1px solid #eee;}
		li > ul { display: none; position: absolute; top: 0; left: 150px; z-index: 1;}
	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
	<script>
		$(document).ready(function() {
			$('li').has('ul').hover(function() {
				$(this).children('ul').fadeIn('fast');
			}, function() {
				$(this).children('ul').delay(500).fadeOut('fast');
			});
		});
	</script>
</head>
<body style="padding: 50px; font-size: 14px; font-family: Helvetica, Arial, sans-serif; color: #555;background: #eee;">
	<ul>
		<li>
			Hello item #1
		</li>
		<li>
			Hello item #2
			<ul>
				<li>
					Subitem #1
				</li>
				<li>
					Subitem #2
					<ul>
						<li>
							Sub-Subitem #1
						</li>
						<li>
							Sub-Subitem #1
						</li>
					</ul>
				</li>
				<li>
					Subitem #3
				</li>
			</ul>
		</li>
		<li>
			Hello item #3
		</li>
		<li>
			Hello item #4
		</li>
	</ul>
</body>
</html>