<h2><?= $title ?></h2>

<?php
    echo validation_errors();
    echo form_open_multipart('categories/create');
?>
<div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name">
</div>
<button type="Submit" class = "btn btn-primary">Submit</button>
</form>
