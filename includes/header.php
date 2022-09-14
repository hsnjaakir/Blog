<!-- Header -->
<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <h2>My Blog<em> . </em></h2>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php while ($category = mysqli_fetch_assoc($getCat)) { ?>
            <li class="nav-item">
              <a class="nav-link" href="category_post.php?view=postview&&cat_name=<?php echo $category['cat_name']; ?>">
                <?php echo $category['cat_name']; ?>
              </a>
            </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="#footer-section"><span style="color: green">Contact Us</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>