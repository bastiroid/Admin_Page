<?php

//list out the cards that we have
require '../app/main.php';

$cards = $db->query("
		SELECT c_id, label, title, body, slug, s_id
		FROM Cards
	")->fetchAll(PDO::FETCH_ASSOC);



require VIEW_ROOT . '/admin/list.php';