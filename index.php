<?php

require 'app/main.php';


//load all cards into $pages
$pages = $db->query("
	SELECT s_id, title
	FROM Sections
	")->fetchAll(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/home.php';