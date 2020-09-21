<?php get_header(); ?>
<div class="wrap indexPage">
  <main class="container">
    <p class="headingTop">
      Tag1
    </p>

    <?php
$tag_posts = get_posts(array(
    'post_type' => 'post', // 投稿タイプ
    'tag_id' => 1, // タグIDを番号で指定する場合
    'tag'    => 'スラッグ', // タグをスラッグで指定する場合
    'posts_per_page' => 6, // 表示件数
    'orderby' => 'date', // 表示順の基準
    'order' => 'DESC' // 昇順・降順
));
global $post;
if($tag_posts): foreach($tag_posts as $post): setup_postdata($post); ?>
  
<!-- ループはじめ -->
<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
<?php the_tags( '<p>', ', ', '</p>' ); ?>
<p><?php the_time('Y/m/d') ?></p>
<p><?php the_excerpt(); ?></p>
<!-- ループおわり -->
  
<?php endforeach; endif; wp_reset_postdata(); ?>


    </main>
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>