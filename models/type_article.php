<?php
	$postsdb = array(
		array(
			'id' => '1',
			'title' => 'Title1',
			'date' => '2017-02-24',
			'content' => 'Content1'),
		array(
			'id' => '2',
			'title' => 'Title2',
			'date' => '2017-02-25',
			'content' => 'Content2')
		);

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