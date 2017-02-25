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