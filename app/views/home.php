<?php require VIEW_ROOT . '/templates/header.php'; ?>  <!--Template header  -->


	<?php if (empty($pages)): ?>
		<p><center>Sorry, no folders at the moment.<center></p>
	<?php else:	?>
		<ul>
			<!-- Loop for folder tables -->
				<!-- Loop for specific folders -->

			<?php foreach ($pages as $page): ?> <!-- print on screen every folder -->
				<li><a href="<?php echo BASE_URL;?>page.php?id=<?php echo $page['s_id']; ?>"><?php echo $page['title']; ?></a></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>


<?php require VIEW_ROOT . '/templates/footer.php'; ?> <!--Template footer  -->

