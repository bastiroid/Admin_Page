<?php

//list out the cards that we have
require '../app/main.php';

$cards = $db->query("
		SELECT p_id, label, title, body, slug, f_id, i_id
		FROM Cards
	")->fetchAll(PDO::FETCH_ASSOC);



require VIEW_ROOT . '/admin/list.php';