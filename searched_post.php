<?php
    include("admin/Class/function.php");
    $obj = new adminBlog();
    $getCat = $obj->display_category();
    if (isset($_POST['submit'])) {
        $str = $_POST['search'];
        $searchedPost = $obj->search_posts($str);
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
                    <img style="max-width: 500px;" src="upload/<?php echo $searchedPost['post_img']; ?>" alt="" class="img-flude">
                    <h2><?php echo $searchedPost['post_title']; ?></h2>
                    <p>
                        <?php echo $searchedPost['post_content']; ?>
                    </p>
                </div>
                <?php include_once("includes/sidebar.php"); ?>
            </div>
        </div>
    </section>


    <?php include_once("includes/footer.php"); ?>

    <?php include_once("includes/script.php"); ?>