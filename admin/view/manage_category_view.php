<?php  
    $catData = $obj->display_category();

    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'delete') {
            $deleteId = $_GET['id'];
            $dltMsg = $obj->delete_category($deleteId);
        }
    }
?>

<h2>Manage category</h2>
<p style="color:green;font-size:25px"> <?php if(isset($dltMsg)) echo $dltMsg; ?> </p>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while($cat = mysqli_fetch_assoc($catData)){ ?>
        <tr>
            <td> <?php echo $cat['cat_id'];?> </td>
            <td> <?php echo $cat['cat_name'];?> </td>
            <td> <?php echo $cat['cat_des'];?> </td>
            <td>
                <a class="btn btn-primary" href="edit.php?status=edit&&id=<?php echo $cat['cat_id'];?>">Edit</a>
                <a class="btn btn-danger" href="?status=delete&&id=<?php echo $cat['cat_id'];?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>