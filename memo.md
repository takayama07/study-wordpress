<!-- template -->

<!-- 表示しているページのタイトルを取得する -->
function get_eyecatch_with_default() {
    if (has_post_thumbnail()){
        $id = get_post_thumbnail_id(); /* アイキャッチ画像のIDを取得する */
        $img = wp_get_attachment_image_src($id, 'large');
    }else{
        $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
        }
    return $img;
}

<!-- 表示しているページのタイトルを取得する -->
<?php wp_title(); ?>


<!-- カテゴリーページ -->
<?php if( is_category()) : ?>
<?php else : ?>
<?php endif; ?>

<!-- タグページ -->
<?php if( is_tag()) : ?>
<?php else : ?>
<?php endif; ?>

<!-- 投稿の新しい記事へのリンクを表示します -->
<?php
$link = get_previous_posts_link('&larr; 新しい記事へ');
if ($link) {
    $link = str_replace('<a', '<a class="btn btn-primary float-left"', $link);
    echo $link;
}
?>

<!-- 投稿の古い記事へのリンクを表示します -->
<?php
$link = get_next_posts_link('古い記事へ &rarr;');
if ($link) {
    $link = str_replace('<a', '<a class="btn btn-primary float-right"', $link);
    echo $link;
}
?>