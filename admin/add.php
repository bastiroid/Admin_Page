<?php

require '../app/main.php';

if (!empty($_POST)) {

	$title = $_POST['title'];
	$s_id = $_POST['s_id'];
	$body = $_POST['body'];
	$label = $_POST['label'];
	$slug = $_POST['slug'];
	$tdesc = $_POST['tdesc'];
	$imageName = basename($_FILES['files']['name']);
	$dir = "../data/";
	$target_file = $dir . basename($_FILES['files']['name']);
	$image_dir = BASE_URL . "data/" . $imageName;

		if (move_uploaded_file($_FILES['files']['tmp_name'], $target_file)) {

			$insertCard = $db->prepare("
				INSERT INTO Cards
				VALUES ('', :s_id, :title, :body, :label, :slug, :imageName, :image_dir, :tdesc
				");

			$insertCard->execute([
					's_id' => $s_id,
					'title' => $title,
					'body' => $body,
					'label' => $label,
					'slug' => $slug,
					'imageName' => $imageName,
					'image_dir' => $image_dir,
					'tdesc' => $tdesc
				]);

			header('Location: ' . BASE_URL . 'admin/list.php');

		}
}


require VIEW_ROOT . '/admin/add.php';