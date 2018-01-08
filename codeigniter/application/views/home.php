<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>TinderLiker</title>
	<style type="text/css">

	body {
		display: flex;
		align-items: center;
		justify-content: center;
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	</style>
</head>
<body>
	<div id="container">
		<div id="button">
		<?php
            echo "Facebook Id: $facebookId<br>" . 
            "Facebook Token: " . substr($facebookToken,0,25) . "...<br>" . 
            "Tinder Token: " . $tinderToken;
		?>
		</div>
		<div id="button">
			<button type="button">Start TinderLiker</button>
		</div>
		<div id="logger">
		<?php
            echo $message;
		?>
		</div>
	</div>
</body>
</html>
