<?php
	// Functions to process posts
	function article_show($db, $id = -1) {
		if ($id == -1) {
			foreach ($db as $i => $item) article_by_index($db, $i);
		} else {
			foreach ($db as $i => $item) {
				if ($item['id'] == $id) {
					article_by_index($db, $i);
					break;
				}
			}
		}
	}

	function article_by_index($db, $i) {
		// print_r($db[$i]['id']); echo "<br>";
		echo <<<_END
		<div class=\"container\">
			<div class=\"post\">
				<a href=\"/?id=" . $db[$i]['id'] . "\">" . $db[$i]['title'] . "</a>
				<br>
				<em>Posted on " . $db[$i]['date'] . "</em>
				<p>" . $db[$i]['content'] . "</p>
			</div>
		</div>
_END;
	}

	function article_new($title, $date, $content) {
		// nothing here yet
	}

	function article_edit($id, $title, $date, $content) {
		// nothing here yet
	}

	function article_delete($id) {
		// nothing here yet
	}
?>