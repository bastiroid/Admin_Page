<?php

require 'app/main.php';


$cards = $db->query("
  SELECT p_id, f_id, title, body, label, slug
  FROM Cards
  ")->fetchAll(PDO::FETCH_ASSOC);


  if (empty($_GET['card']) && empty($_GET['id'])) {
    $card = false;
  } else {
    $slug = $_GET['card'];
    $f_id = $_GET['id'];

      $card = $db->prepare("
        SELECT *
        FROM Cards
        WHERE slug = :slug
        AND f_id = :f_id
      ");

      $card->execute(['slug' => $slug, 'f_id' => $f_id]);

      $card = $card->fetch(PDO::FETCH_ASSOC);


  }


require VIEW_ROOT . '/page/showCard.php';