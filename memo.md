<!-- template -->

/*アイキャッチ画像がなければ標準画像を取得する*/
function get_eyecatch_with_default() {
    if (has_post_thumbnail()){
        $id = get_post_thumbnail_id(); /* アイキャッチ画像のIDを取得する */
        $img = wp_get_attachment_image_src($id, 'large');
    }else{
        $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
        }
    return $img;
}

/*表示しているページのタイトルを取得する*/
<?php wp_title(); ?>


/*カテゴリーページ*/
<?php if( is_category()) : ?>
<?php else : ?>
<?php endif; ?>

/*タグページ*/
<?php if( is_tag()) : ?>
<?php else : ?>
<?php endif; ?>