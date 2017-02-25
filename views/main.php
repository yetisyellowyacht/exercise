<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>blog-lite</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" 
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	
	<header>
		<h1>This is a humble blog</h1>
		<hr>
	</header>

	<body>
		<!-- <?php var_dump($postsdb); echo '<hr>'; ?> --> <!-- this is a debug line -->
		<?php isset($_GET['id']) ? article_show($_GET['id']) : article_list(); ?>
	</body>
	
	<footer>
		<hr>
		<hr>
		&copy; <?php echo date('Y');?>
	</footer>

</html>