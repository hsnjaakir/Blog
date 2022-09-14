<?php
include("admin/Class/function.php");
$obj = new adminBlog();
$getCat = $obj->display_category();

if (isset($_GET['view'])) {
    if ($_GET['view'] == 'postview') {
        $cat_name = $_GET['cat_name'];
        $category_info = $obj->get_category_info($cat_name);
    }
}

?>
<?php include_once("includes/head.php"); ?>

<body>

    <?php include_once("includes/preloader.php"); ?>

    <?php include_once("includes/header.php"); ?>

    <!-- Page Content -->

    <?php include_once("includes/banner.php"); ?>

    <?php include_once("includes/cta.php"); ?>
    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            <?php while ($categoryPost = mysqli_fetch_assoc($category_info)) { ?>
                                <div class="col-lg-12">
                                    <div class="blog-post">
                                        <div class="blog-thumb">
                                            <img style="height: 500px;" src="upload/<?php echo $categoryPost['post_img']; ?>">
                                        </div>
                                        <div class="down-content">
                                            <span><?php echo $categoryPost['cat_name']; ?></span>
                                            <h4><?php echo $categoryPost['post_title']; ?><span style="font-size: 10px;"><a href="single_post.php?view=postview&&id=<?php echo $categoryPost['post_id']; ?>"> Details</a></span></h4>
                                            <ul class="post-info">
                                                <li><a href="#"><?php echo $categoryPost['post_author']; ?></a></li>
                                                <li><a href="#"><?php echo $categoryPost['post_date']; ?></a></li>
                                                <!-- <li><a href="#"><?php echo $categoryPost['post_comment_count']; ?></a></li> -->
                                            </ul>
                                            <p><?php echo $categoryPost['post_summery']; ?></p>
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <?php echo $categoryPost['post_tag']; ?>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul class="post-share">
                                                            <li><i class="fa fa-share-alt"></i></li>
                                                            <li><a href="#">Facebook</a>,</li>
                                                            <li><a href="#"> Twitter</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php include_once("includes/sidebar.php"); ?>
            </div>
        </div>
    </section>

    <?php include_once("includes/footer.php"); ?>

    <?php include_once("includes/script.php"); ?>