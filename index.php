<!DOCTYPE html>
<html lang="ru">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
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
	        <div>
	        	<?php
	        		// The php code is here
	        		function gen_matrix($size) 
	        		{
	        			$arr = array();
	        			$subarr = array();
	        			for ($i = 0; $i < $size; $i++)
	        			{
	        				$subarr[] = '.';
	        			}
	        			for ($i = 0; $i < $size; $i++)
	        			{
	        				$arr[] = $subarr;
	        			}
	        			return $arr;
	        		}

	        		$board = gen_matrix(3);
	        		$board[1][1] = 'X';
	        		$board[0][0] = 'O';

	        		echo time().' seconds since 01/01/1970';
	        		echo '<pre>';
	        		// tbd
	        		foreach ($board as $line) {
	        			foreach ($line as $cell) {
	        				print($cell.' ');
	        			}
	        			print('<br>');
	        		}
	        		echo '</pre>';
	        		echo '<hr>';
	        	?>
	        </div>

			<div class="post">
				<h2>Basic Rules for D&amp;D</h2>
				<em><?php echo date('Y-m-d, l');?></em>
				<p>
					An article to be written.
				</p>
			</div>

			<div class="post">
				<h2>Basic English Grammar Rules</h2>
				<em><?php echo date('Y-m-d, l');?></em>
				<p>
					Another unwritten article.
				</p>
			</div>
        </div>
	</body>
	
	<footer>
		<hr>
		&copy; <?php echo date('Y');?>
	</footer>

</html>