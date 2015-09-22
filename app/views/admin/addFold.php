<?php require VIEW_ROOT . '/templates/header.php'; ?>

<h2>Add folder</h2>

<form action="<?php echo BASE_URL; ?>admin/addFold.php" method="POST" autocomplete="off">
  <label for = "s_id">
    Section id
    <input type="text" name="s_id" id="s_id">
  </label>
  <br><br>
  <label for="title">
    Title
    <input type="text" name="title" id="title">
  </label>
  <br><br>
  <label for="slug">
    Slug
    <input type="text" name="slug" id="slug">
  </label>
  <br><br>
  <input type="submit" value="Add">

</form>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>