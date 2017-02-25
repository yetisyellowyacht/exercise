<?php
	// Functions to process posts
	function article_list() {
		global $postsdb;
		foreach ($postsdb as $i => $p) article_by_index($i);
	}
	function article_show($id) {
		global $postsdb;
		foreach ($postsdb as $p) {
			if ($p['id'] == $id) {
				$post_selected = $p;
				break;
			}
		}
		return article_by_index($i);
	}
	function article_by_index($i) {
		global $postsdb;
		return $postsdb[$i];
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