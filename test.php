<?php

?>

<!DOCTYPE html>
<html dir="ltr" lang="sv-SE">
<head>
	
	<title>Captcha</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<script src="http://www.kawebb.se/files/script/jquery.1.7.1.js"></script>
	<script>
		$(document).ready(function() {


		});
	</script>
	<style type="text/css">
		body { padding: 50px; font-family: "Open Sans";}
		#div1 { position: absolute; top: 150px; left: 150px; width: 400px; height: 200px; z-index: 1; background: white; box-shadow: 2px 2px 5px rgba(0, 0, 0, .2); -moz-transition: 1s all;}
		#div2 { position: absolute; top: 180px; left: 180px; width: 400px; height: 200px; z-index: 2; background: white; box-shadow: 2px 2px 5px rgba(0, 0, 0, .2); -moz-transition: 1s all;}
	</style>

</head>
<body>

<div id="div1"></div>
<div id="div2"></div>

</body>
</html>