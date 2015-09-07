<?php require VIEW_ROOT . '/templates/header.php'; ?>  <!--Template header  -->


	<?php if (empty($pages)): ?>
		<p><center>Sorry, no cards at the moment.<center></p>
	<?php else:	?>
		<ul>
			<!-- Loop for card tables -->
				<!-- Loop for specific cards -->

			<?php foreach ($pages as $page): ?> <!-- print on screen every card -->
				<li><a href="<?php echo BASE_URL;?>page.php?page=<?php echo $page['slug']; ?>"><?php echo $page['label']; ?></a></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?> <!--Template footer  -->