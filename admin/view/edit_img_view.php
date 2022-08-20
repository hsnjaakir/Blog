<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'editImg') {
        $id = $_GET['id'];
    }
}
if (isset($_POST['change_img_btn'])) {
    $msg = $obj->edit_img($_POST);
}

?>

<div class="shadow m-5 p-5">
    <p style="color:green;font-size:25px"> <?php if (isset($msg)) {echo $msg;} ?> </p>
    <form action="" method="POST" enctype="multipart/form-data" class="form">
        <input type="hidden" name="editImg_id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label class="mb-1" for="change_img">Upload Thumbnail</label><br>
            <input name="change_img" class="py-4" id="change_img" type="file" />
            <br>
            <input type="submit" value="Change Thumbnail" name="change_img_btn" class="btn btn-primary">
        </div>

    </form>
</div>