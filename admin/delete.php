<?php

require '../app/main.php';

if (isset($_GET['id'])) {
	$deleteCard = $db->prepare("
			DELETE FROM Cards
			WHERE p_id = :id;
		");

	$deleteCard->execute(['id' => $_GET['id']]);
}

header('Location: ' . BASE_URL . 'admin/list.php');