<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<h3>Add page</h3>
        <div class="mdl-grid">      

 <div class="mdl-cell mdl-cell--6-col">

  <form action="<?php echo BASE_URL; ?>admin/add.php" method="POST" autocomplete="off">
    <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="title" />
    <label class="mdl-textfield__label" for="title">Title</label>
    </div>
    <br>
    <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="f_id" />
    <label class="mdl-textfield__label" for="f_id">Folder</label>
    </div>
    <br>
    <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="i_id" />
    <label class="mdl-textfield__label" for="i_id">Image</label>
    </div>
    <br>
    <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="label" />
    <label class="mdl-textfield__label" for="label">Label</label>
    </div>
    <br>
    <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="slug" />
    <label class="mdl-textfield__label" for="slug">Slug</label>
    </div>
    <br>
    <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "4" id="body" ></textarea>
    <label class="mdl-textfield__label" for="body">Body...</label>
  </div>
    <br>
      <button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add">
        <i class="material-icons" role="presentation">add</i>
        <span class="visuallyhidden">Add</span>
      </button>

  </form>
 
 </div>
  <div class="mdl-cell mdl-cell--6-col">
    
  </div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>