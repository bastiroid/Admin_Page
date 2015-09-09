<?php

require 'app/main.php';


//load all cards into $pages
$pages = $db->query("
	SELECT f_id, title
	FROM Folders
	")->fetchAll(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/home.php';