<?php

//list out the cards that we have
require '../app/main.php';

$pages = $db->query("
		SELECT id, label, title, body, slug
		FROM cards
		ORDER BY id DESC
	")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/list.php';