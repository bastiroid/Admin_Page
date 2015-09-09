<?php

require '../app/main.php';

if (!empty($_POST)) {

	$title = $_POST['title'];
	$body = $_POST['body'];
	$label = $_POST['label'];
	$slug = $_POST['slug'];
	$f_id = $_POST['f_id'];
	$i_id = $_POST['i_id'];

	$insertCard = $db->prepare("
		INSERT INTO Cards
		VALUES ('', :title, :body, :label, :slug, :f_id, :i_id)
		");

	$insertCard->execute([
		'title' => $title,
		'body' => $body,
		'label' => $label,
		'slug' => $slug,
		'f_id' => $f_id,
		'i_id' => $i_id
	]);

	header('Location: ' . BASE_URL . 'admin/list.php');
}


require VIEW_ROOT . '/admin/add.php';