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
				<h2>Post 1</h2>
				<em><?php echo date('Y-m-d, l');?></em>
				<p>
					The required format parameter of the date() function specifies 
					how to format the date (or time). <br>
					Here are some characters that are commonly used for dates:<br>
				    d - Represents the day of the month (01 to 31)<br>
				    m - Represents a month (01 to 12)<br>
				    Y - Represents a year (in four digits)<br>
				    l (lowercase 'L') - Represents the day of the week<br>
					Other characters, like"/", ".", or "-" can also be inserted 
					between the characters to add additional formatting.
					The example below formats today's date in three different ways:
				</p>
			</div>

			<div class="post">
				<h2>Post 2</h2>
				<em><?php echo date('Y-m-d, l');?></em>
				<p>
					The required format parameter of the date() function specifies how to format the date (or time). <br>
					Here are some characters that are commonly used for dates:<br>
				</p>
			</div>
        </div>
	</body>
	
	<footer>
		<hr>
		<hr>
		&copy; <?php echo date('Y');?>
	</footer>

</html>