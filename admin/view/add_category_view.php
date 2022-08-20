<?php
    if (isset($_POST['add_cat'])) {
        $return_msg = $obj->add_category($_POST);
    }
?>

<h2>Add category</h2>
<p style="color:green;font-size:25px"> <?php if(isset($return_msg)) { echo $return_msg; }?> </p>
<form action="" method="POST">
    <div class="form-group">
        <label class="mb-1" for="cat_name">Category Name</label>
        <input name="cat_name" class="form-control py-4" id="cat_name" type="text" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="cat_des">Category Description</label>
        <input name="cat_des" class="form-control py-4" id="cat_des" type="text" />
    </div>
    <input type="submit" class="from-control btn btn-block btn-primary" name="add_cat" value="Add Category">
</form>