
  <?php get_header(); ?>




<?php get_template_part('includes/header'); ?>

  <?php wp_body_open(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

  <!-- Page Header -->

  <?php
  $eyecatch = get_eyecatch_with_default();
  ?>
  <header class="masthead" style="background-image: url('<?php echo $eyecatch[0]; ?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          <?php the_post_thumbnail(); ?><!-- サムネイルの出力 -->
          <div class="post-heading">
            <h1><?php the_title(); ?></h1>
            <span class="meta">
            <?php the_author(); ?>
            on <?php the_date(); ?><!-- 投稿日を出力 -->
            </span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php the_content(); ?>
        </div>
      </div>
    </div>
  </article>

  <hr>

  <?php endwhile; ?>
  <?php endif; ?>

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>
