<?php

require 'app/main.php';

$cards = $db->query("
  SELECT c_id, s_id, title, body, label, slug, image_url
  FROM Cards
  ")->fetchAll(PDO::FETCH_ASSOC);

  if (empty($_GET['card']) && empty($_GET['id'])) {
    $card = false;
  } else {
    $slug = $_GET['card'];
    $s_id = $_GET['id'];

      $card = $db->prepare("
        SELECT *
        FROM Cards
        WHERE slug = :slug
        AND s_id = :s_id
      ");


      $card->execute(['slug' => $slug, 's_id' => $s_id]);

      $card = $card->fetch(PDO::FETCH_ASSOC);


  }


require VIEW_ROOT . '/page/showCard.php';