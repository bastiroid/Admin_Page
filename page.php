<?php

require 'app/main.php';


$cards = $db->query("
  SELECT c_id, s_id, title, body, label, slug
  FROM Cards
  ")->fetchAll(PDO::FETCH_ASSOC);


//check if the slug is empty
if (empty($_GET['id'])) {
	$page = false;
} else {
	$s_id = $_GET['id'];

	$page = $db->prepare("
		SELECT * 
		FROM Sections
		WHERE s_id = :s_id
	");



	$page->execute(['s_id' => $s_id]);

	$page = $page->fetch(PDO::FETCH_ASSOC);

}

require VIEW_ROOT . '/page/show.php';