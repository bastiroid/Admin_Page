<?php require VIEW_ROOT . '/templates/header.php'; ?>

<h1><?php echo escape($card['title']); ?></h1>

<h2><?php echo escape($card['body']); ?></h2>


<img width="350" src="<?php echo BASE_URL; ?>data/<?php echo $card['image_url']; ?>">



<?php require VIEW_ROOT . '/templates/footer.php'; ?>