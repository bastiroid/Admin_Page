<?php require VIEW_ROOT . '/templates/header.php'; ?>


		<h2><?php echo escape($page['title']); ?></h2>


      <?php if (empty($cards)): ?>
        <p><center>Sorry, no cards at the moment.<center></p>
      <?php else: ?>
        <ul>
          <!-- Loop for folder tables -->
          <!-- Loop for specific folders -->

        <?php foreach ($cards as $card): ?> <!-- print on screen every folder -->

          <?php if($page['f_id'] == $card['f_id']) { ?>
            <li><a href="<?php echo BASE_URL;?>card.php?id=<?php echo $page['f_id']; ?>&card=<?php echo $card['slug']; ?>"><?php echo $card['title']; ?></a></li>
          <?php } ?>
      <?php endforeach; ?>
      </ul>
      <?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>