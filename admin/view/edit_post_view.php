<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'editPost') {
        $id = $_GET['id'];
        $postData = $obj->get_post_info($id);
    }
}

if (isset($_POST['update_post'])) {
    $msg = $obj->update_post($_POST);
}
?>


<div class="shadow m-5 p-5">
    <p style="color:green;font-size:25px"> <?php if (isset($msg)) {echo $msg; } ?> </p>
    <p style="color:red;font-size:25px"> <?php if (isset($dltmsg)) {echo $dltmsg; } ?> </p>
    <form action="" method="POST" class="form">
        <input type="hidden" name="edit_post_id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label class="mb-1" for="change_title">Change Title</label><br>
            <input value="<?php echo $postData['post_title'] ?>" name="change_title" class="py-4 form-control" id="change_title" type="text" />
            <br>
            <label class="mb-1" for="change_content">Change Content</label><br>
            <textarea name="change_content" id="change_content" class="form-control" cols="30" rows="10">
                <?php echo $postData['post_content'] ?>
            </textarea> <br>
            <input type="submit" value="Update_post" name="update_post" class="btn btn-primary">
        </div>

    </form>
</div>