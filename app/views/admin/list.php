<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if (empty($pages)): ?>
		<p><center>No page at the moment.<center></p>
	<?php else:	?>

		<table>
			<caption>Cards</caption>
			<thead>
				<tr>
					<th>Label</th>
					<th>Title</th>
					<th>Slug</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
                <?php foreach($pages as $page): ?>
                	<tr>
                		<td><?php echo escape($page['label']); ?></td>
                		<td><?php echo escape($page['title']); ?></td>
                		<td><a href="<?php echo BASE_URL ?>page.php?page=<?php echo escape($page['slug']); ?>"><?php echo escape($page['slug']); ?></a></td>
                		<td><a href="<?php echo BASE_URL ?>admin/edit.php?id=<?php echo escape($page['id']); ?>">Edit</a></td>
                		<td><a href="<?php echo BASE_URL ?>admin/delete.php?id=<?php echo escape($page['id']); ?>">Delete</a></td>
                	</tr>
                <?php endforeach; ?>
			</tbody>
		</table>

	<?php endif; ?>

	<div class="addNew">
		<a href="<?php echo BASE_URL; ?>/admin/add.php">Add a new page</a>
	</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>