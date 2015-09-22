<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if (empty($cards)): ?>
		<p><center>No page at the moment.<center></p>
	<?php else:	?>

		<table class="mdl-data-table mdl-js-data-table">
			<h3>Cards</h3>
			<thead>
				<tr>
					<th>Label</th>
					<th>Title</th>
					<th>Folder</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
                <?php foreach($cards as $card): ?>
                	<tr>
                		<td><?php echo escape($card['label']); ?></td>
                		<td><?php echo escape($card['title']); ?></td>
                		<td><?php echo escape($card['s_id']); ?></td>
                		<td><a href="<?php echo BASE_URL ?>admin/edit.php?id=<?php echo escape($card['c_id']); ?>">Edit</a></td>
                		<td><a href="<?php echo BASE_URL ?>admin/delete.php?id=<?php echo escape($card['c_id']); ?>">Delete</a></td>
                	</tr>
                <?php endforeach; ?>
			</tbody>
		</table>

	<?php endif; ?>

	<div class="addNew">
		<a href="<?php echo BASE_URL; ?>admin/add.php">Add a new card</a>
    <br><br>
    <a href="<?php echo BASE_URL; ?>admin/addFold.php">Add a new section</a>
	</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>