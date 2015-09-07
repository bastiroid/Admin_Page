<?php

require '../app/main.php';

if (!empty($_POST)) {

	$label = $_POST['label'];
	$title = $_POST['title'];
	$body = $_POST['body'];
	$slug = $_POST['slug'];

	$insertPage = $db->prepare("
		INSERT INTO cards (label, title, body, slug)
		VALUES (:label, :title, :body, :slug)
		");

	$insertPage->execute([
		'label' => $label,
		'title' => $title,
		'body' => $body,
		'slug' => $slug
	]);

	header('Location: ' . BASE_URL . '/admin/list.php');
}


require VIEW_ROOT . '/admin/add.php';