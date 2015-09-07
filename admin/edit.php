<?php

require '../app/main.php';

if (!empty($_POST)) {
	$id = $_POST['id'];
	$label = $_POST['label'];
	$title = $_POST['title'];
	$body = $_POST['body'];
	$slug = $_POST['slug'];

	$updatePage = $db->prepare("
			UPDATE cards
			SET
				label = :label,
				title = :title,
				body = :body,
				slug = :slug
			WHERE id = :id
		");

	$updatePage->execute([
			'id'	=> $id,
			'label' => $label,
			'title' => $title,
			'body' => $body,
			'slug' => $slug,
		]);

	header('Location: ' . BASE_URL . 'admin/list.php');
}

if (!isset($_GET['id'])) {
	header('Location: ' . BASE_URL . 'admin/list.php');
	die();
}

$page = $db->prepare("
	SELECT id, label, title, body, slug
	FROM cards
	WHERE id = :id
	");

$page->execute(['id' => $_GET['id']]);

$page = $page->fetch(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/admin/edit.php';