<html>
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Luz Sollar Lab</title>
		<link rel="stylesheet" type="text/css" href="public/css/main.css">
	</head>
	<body>
		<div class="top_bar">
			<div class="container">
				<div class="logo">
					<img src="public/img/badge2.png"/>
				</div>
				<div class="menu">
					<a href="#">item 1</a>
					<a href="#">item 2</a>
					<a href="#">item 3</a>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="container">
			<!-- carrega página de conteúdo -->
			<?php include_once('view/' . $page . '.php');?>
			</div>
		</div>
	</body>
</html>