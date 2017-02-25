<?php
	// Functions to process posts
	function article_list() {
		return $GLOBALS['postsdb'];
	}
	function article_show($id) {
		global $postsdb;
		return $postsdb[$id];
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