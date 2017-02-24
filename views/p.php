<?php require_once '../models/type_article.php'; ?>

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
        <div class="container">
			<div class="post">
				<?php $p = $postsdb[$_GET['id']]; ?>
				<a href="views/p.php?id=<?=$p['id']?>"><?=$p['title']?></a>
				<br>
				<em>Posted <?=$p['date']?></em>
				<p><?=$p['content']?></p>
			</div>
		</div>
	</body>
	
	<footer>
		<hr>
		<hr>
		&copy; <?php echo date('Y');?>
	</footer>

</html>