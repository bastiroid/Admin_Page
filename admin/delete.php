<?php

require '../app/main.php';

if (isset($_GET['id'])) {
	$deletePage = $db->prepare("
			DELETE FROM cards
			WHERE id = :id
		");

	$deletePage->execute(['id' => $_GET['id']]);
}

header('Location: ' . BASE_URL . '/admin/list.php');