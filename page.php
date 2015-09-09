<?php

require 'app/main.php';


$cards = $db->query("
  SELECT p_id, f_id, title, body, label, slug
  FROM Cards
  ")->fetchAll(PDO::FETCH_ASSOC);

//check if the slug is empty
if (empty($_GET['id'])) {
	$page = false;
} else {
	$f_id = $_GET['id'];

	$page = $db->prepare("
		SELECT * 
		FROM Folders
		WHERE f_id = :f_id
	");



	$page->execute(['f_id' => $f_id]);

	$page = $page->fetch(PDO::FETCH_ASSOC);


}

require VIEW_ROOT . '/page/show.php';