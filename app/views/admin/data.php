<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <form action="<?php echo BASE_URL; ?>admin/upload.php" method="POST" enctype="multipart/form-data">
    Select images to upload:
    <input type="file" name="files" multiple />
    <br><br>
    <input type="submit" value="Upload" />
    <br><br>


  </form>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>