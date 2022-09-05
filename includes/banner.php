<?php
$posts = $obj->display_post_UI();
?>

<!-- Banner Starts Here -->

<div class="main-banner header-text">
  <div class="container-fluid">
    <div class="owl-banner owl-carousel">
      <?php while ($postData = mysqli_fetch_assoc($posts)) { ?>
        <div class="item">
          <img style="height: 200px;" src="upload/<?php echo $postData['post_img']; ?>">
          <div class="item-content">
            <div class="main-content">
              <div class="meta-category">
                <span><?php echo $postData['cat_name']; ?></span>
              </div>
              <a href="single_post.php?view=postview&&id=<?php echo $postData['post_id']; ?>">
                <?php echo $postData['post_title']; ?>
              </a>
              <ul class="post-info">
                <li><a href="#"><?php echo $postData['post_author']; ?></a></li>
                <li><a href="#"><?php echo $postData['post_date']; ?></a></li>
                <li><a href="#"><?php echo $postData['post_comment_count']; ?></a></li>
              </ul>
            </div>
          </div>
        </div> <?php } ?>
    </div>
  </div>
</div>
<!-- Banner Ends Here -->