<?php get_header(); ?>
<div class="wrap indexPage">
  <main class="container">
    <?php
      $newposts = get_posts( array(
        'post_type' => 'post',
        'posts_per_page' => '1'
      ));
      if( $newposts ): ?>
      <?php foreach($newposts as $post):setup_postdata($post); ?>
        <div class="jumbotron">
        <a href="<?php the_permalink(); ?>">
        <div class="titleWrap">
          <!-- 投稿日時 -->
          <p class="date"><?php the_time('Y.m.d'); ?></p>
          <!-- 記事タイトル -->
          <p class="description"><?php the_title(); ?></p>
        </div>
      </a>
    </div>
    <?php endforeach; ?>
      <?php wp_reset_postdata(); endif; ?>
        <div class="postWrap">
          <?php
            $newposts = get_posts( array(
              'post_type' => 'post',
              'posts_per_page' => '4' ));
            if( $newposts ): ?>
            <?php foreach($newposts as $post):setup_postdata($post); ?>
              <div class="post">
              <a href="<?php the_permalink(); ?>">
                <?php
                  if( has_post_thumbnail() ):
                    the_post_thumbnail('full');
                  else :
                  endif;
                ?>
                <!-- 投稿日時 -->
                <p class="date"><?php the_time('Y.m.d'); ?></p>
                <!-- 記事タイトル -->
                <p class="description"><?php the_title(); ?></p>
              </a>
              <ul class="tags" style="list-style:none;">
              <?php 
                $tags = get_the_tags();
                foreach ( $tags as $tag ) {
                  echo '<li class="tag"><a href="'.$tags.'">'.$tag->name.'</a></li>';
                }
              ?>
            </ul>
          </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); endif; ?>
        </div>
      <p class="readmore">
      <a href="<?php echo content_url(); ?>article" class="btn">
        read more
      </a>
    </p>
  </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>