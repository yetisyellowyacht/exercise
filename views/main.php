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
        <?php foreach ($postsdb as $post) : ?>
        <div class="container">
			<div class="post">
				<a href="views/p.php?id=<?=$post['id']?>"><?=$post['title']?></a>
				<br>
				<em>Posted <?=$post['date']?></em>
				<p><?=$post['content']?></p>
			</div>
		</div>
	<?php endforeach; ?>
	</body>
	
	<footer>
		<hr>
		<hr>
		&copy; <?php echo date('Y');?>
	</footer>

</html>