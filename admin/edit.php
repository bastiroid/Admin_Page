<?php

require '../app/main.php';

if (!empty($_POST)) {

	$c_id = $_POST['c_id'];
	$title = $_POST['title'];
	$body = $_POST['body'];
	$label = $_POST['label'];
	$slug = $_POST['slug'];  
	$s_id = $_POST['s_id'];
	$tdesc = $_POST['tdesc'];



	$updateCard = $db->prepare("
			UPDATE Cards
			SET
				title = :title,
				body = :body,
				label = :label,
				slug = :slug,
				tdesc = :tdesc,
				s_id = :s_id
			WHERE c_id = :c_id;
		");

	$updateCard->execute([
			'c_id' => $c_id,
			'title' => $title,
			'body' => $body,
			'label' => $label,
			'slug' => $slug,
			'tdesc' => $tdesc,
			's_id' => $s_id
		]);


	header('Location: ' . BASE_URL . 'admin/list.php');
}

if (!isset($_GET['id'])) {
	header('Location: ' . BASE_URL . 'admin/list.php');
	die();
}

$card = $db->prepare("
	SELECT c_id, title, body, label, slug, s_id, tdesc
	FROM Cards
	WHERE c_id = :id;
	");

$card->execute(['id' => $_GET['id']]);

$card = $card->fetch(PDO::FETCH_ASSOC);



require VIEW_ROOT . '/admin/edit.php';