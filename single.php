<?php
/*
single page
*/
get_header(); ?>
  <div class="wrap singlePage">
    <main class="container">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article>
        <div class="jumbotron">
          <?php
            if( has_post_thumbnail() ):
              the_post_thumbnail('full');
            else :
            endif;
          ?>
          <div class="titleWrap">
            <!-- 投稿日時 -->
            <p class="date"><?php the_time('Y.m.d'); ?></p>
            <!-- 記事タイトル -->
            <p class="description"><?php the_title(); ?></p>
          </div>
        </div>
        <div class="postWrap">
          <p class="postText">
            <?php the_content(); ?>
          </p>
        </div>
      </article>
      <div class="tagWrap">
        <h3 class="heading">Tags</h3>
        <ul class="tags" style="list-style:none;">
          <li class="tag">
          <?php if (!is_category() && has_category()): $category = get_the_category(); ?>
            <a href="<?php get_category_link( $category[0]->cat_ID); ?>">
              <?php echo $category[0]->cat_name; ?>
            </a>
          </li>
        </ul>
      </div>
      <?php endif; ?>
      <?php endwhile; endif; ?>
      <div class="share">
        <h3 class="heading">記事をシェアする</h3>
        <div class="shareWrap">
          <p class="facebook">
            <a href="" class="btn">
              <i class="fab fa-facebook-f ">
                <span>
                  シェアする
                </span>
              </i>
            </a>
          </p>
          <p class="twitter">
            <a href="">
              <i class="fab fa-twitter btn">
                <span>
                ツイートする
                </span>
              </i>
            </a>
          </p>
        </div>
      </div>
    </main>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>