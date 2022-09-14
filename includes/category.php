<div class="col-lg-12">
    <div class="sidebar-item categories">
        <div class="sidebar-heading">
            <h2>Categories</h2>
        </div>
        <div class="content">
            <ul>
                <?php while ($category = mysqli_fetch_assoc($getCat)) { ?>
                    <li>
                        <a href="category_post.php?view=postview&&cat_name=<?php echo $category['cat_name']; ?>">
                            <?php echo $category['cat_name']; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>