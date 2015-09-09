<?php

require '../app/main.php';

if (!empty($_POST)) {

	$p_id = $_POST['p_id'];
	$title = $_POST['title'];
	$body = $_POST['body'];
	$label = $_POST['label'];
	$slug = $_POST['slug'];  
	$f_id = $_POST['f_id'];
	$i_id = $_POST['i_id'];



	$updateCard = $db->prepare("
			UPDATE Cards
			SET
				title = :title,
				body = :body,
				label = :label,
				slug = :slug,
				f_id = :f_id,
				i_id = :i_id
			WHERE p_id = :p_id;
		");

	$updateCard->execute([
			'p_id' => $p_id,
			'title' => $title,
			'body' => $body,
			'label' => $label,
			'slug' => $slug,
			'f_id' => $f_id,
			'i_id' => $i_id
		]);


	header('Location: ' . BASE_URL . 'admin/list.php');
}

if (!isset($_GET['id'])) {
	header('Location: ' . BASE_URL . 'admin/list.php');
	die();
}

$card = $db->prepare("
	SELECT p_id, title, body, label, slug, f_id, i_id
	FROM Cards
	WHERE p_id = :id;
	");

$card->execute(['id' => $_GET['id']]);

$card = $card->fetch(PDO::FETCH_ASSOC);



require VIEW_ROOT . '/admin/edit.php';