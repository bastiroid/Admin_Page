<?php

require 'app/main.php';

//load all cards into $pages
$pages = $db->query("
	SELECT id, body, title, label, slug
	FROM cards
	")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/home.php';