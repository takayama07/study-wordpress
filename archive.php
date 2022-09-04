<!DOCTYPE html>
<html lang="en">

<head>

<?php get_header(); ?>

</head>



<body>


 <?php get_template_part('includes/header'); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
              <!-- カテゴリーページとタグページを分ける -->
            <?php if (is_category()): ?>
            <h1>Category</h1>
              <!-- 作成者のページ表示 -->
            <?php elseif (is_author()): ?>
              <h1>Author</h1>
              <!-- 日付別アーカイブページの作成 -->
            <?php elseif(is_date()): ?>
              <h1>Date</h1>
            <?php else: ?>
            <h1>Tag</h1>
            <?php endif; ?>
            <span class="subheading"><?php wp_title(''); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>

        <div class="post-preview">
          <a href="<?php the_permalink(); ?>"><!-- リンク先の設定 -->
            <h2 class="post-title">
              <?php the_title(); ?>
            </h2>
            <h3 class="post-subtitle">
              <?php the_excerpt(); ?><!-- 抜粋 -->
            </h3>
          </a>
          <p class="post-meta">
            <?php the_author(); ?><!-- 著者名の変更 -->
            <?php the_time(get_option('date_format')); ?></p>
        </div>
        <hr>
        <?php endwhile; ?><!-- trueまで繰り返し記事を表示する -->

        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>

        <?php else: ?>
          <p>記事が見つかりませんでした</p>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <hr>

 <?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>
</body>

</html>
