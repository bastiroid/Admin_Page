<?php

require '../app/main.php';


if (!empty($_POST)) {

  $s_id = $_POST['s_id'];
  $title = $_POST['title'];
  $slug = $_POST['slug'];

  $insertSect = $db->prepare("
      INSERT INTO Sections
      VALUES (:s_id, :title, :slug)
    ");

  $insertSect->execute([
      's_id'  => $s_id,
      'title' => $title,
      'slug'  => $slug
    ]);

  header('Location: ' . BASE_URL);
}


require VIEW_ROOT . '/admin/addFold.php';