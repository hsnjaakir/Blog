<?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'edit') {
            $editId = $_GET['id'];
            $returnData = $obj->display_category_by_id($editId);
        }
    }

    if (isset($_POST['update_cat'])) {
        $return_msg = $obj->update_category($_POST);
    }
?>

<h2>Update category</h2>
<p style="color:green;font-size:25px"><?php if(isset($return_msg)) { echo $return_msg; }?></p>
<form action="" method="POST">
    <div class="form-group">
        <label class="mb-1" for="cat_name">Category Name</label>
        <input name="u_cat_name" class="form-control py-4" id="cat_name" type="text" value="<?php echo $returnData['cat_name']; ?> "/>
    </div>
    <div class="form-group">
        <label class="mb-1" for="cat_des">Category Description</label>
        <input name="u_cat_des" class="form-control py-4" id="cat_des" type="text" value="<?php echo $returnData['cat_des']; ?> "/>
    </div>
    <input type="hidden" name="u_cat_id" value="<?php echo $returnData['cat_id']; ?>">
    <input type="submit" class="from-control btn btn-block btn-primary" name="update_cat" value="Update Category">
</form>