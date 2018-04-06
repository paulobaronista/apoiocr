<?php get_header(); ?>
	<div id="content" class="grid_19 <?php echo of_get_option('blog_sidebar_pos') ?>">
	<div class="vr <?php if (of_get_option('blog_sidebar_pos')=='right') {echo ' right-indent';} else {echo ' left-indent';} ?>">
		<?php include_once (TEMPLATEPATH . '/title.php');?>   
		<div class="posts-list">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header>
          <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <?php $post_meta = of_get_option('post_meta'); ?>
					<?php if ($post_meta=='true' || $post_meta=='') { ?>
                <div class="post-meta">
                    Categoria: <?php the_category(', ') ?>
                </div>
            <!--<div class="post-meta">
              <div class="fleft">Postado em <time datetime="<?php //the_time('Y-m-d\TH:i'); ?>"><?php //the_time('F j, Y'); ?></time> by <?php //the_author_posts_link() ?> in <?php //the_category(', ') ?></div>
            </div><!--.post-meta-->
          <?php } ?>		
        </header>
        <?php $post_image_size = of_get_option('post_image_size'); ?>
				<?php if($post_image_size=='' || $post_image_size=='normal'){ ?>
          <?php if(has_post_thumbnail()) {
            echo '<figure class="featured-thumbnail"><span class="img-wrap"><a href="'; the_permalink(); echo '">';
            echo the_post_thumbnail();
            echo '</a></span></figure>';
            }
          ?>
        <?php } else { ?>
          <?php if(has_post_thumbnail()) {
            echo '<figure class="featured-thumbnail large"><span class="img-wrap clearfix"><span class="f-thumb-wrap"><a href="'; the_permalink(); echo '">';
            echo the_post_thumbnail('post-thumbnail-xl');
            echo '</a></span></span></figure>';
            }
          ?>
        <?php } ?>
        
        <div class="post-content">
          <?php $post_excerpt = of_get_option('post_excerpt'); ?>
      		<?php if ($post_excerpt=='true' || $post_excerpt=='') { ?>
            <div class="excerpt"><?php $content = get_the_content(); echo my_string_limit_words($content,106);?></div>
          <?php } ?>
          <a href="<?php the_permalink() ?>" class="button">Leia Mais</a><?php //comments_popup_link('No comments', 'One comment', '% comments', 'comments-link', 'Comments are closed'); ?>
        </div>
      </article>
      
    <?php endwhile; else: ?>
      <div class="no-results">
        <p><strong>There has been an error.</strong></p>
        <p>We apologize for any inconvenience, please <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">return to the home page</a> or use the search form below.</p>
        <?php get_search_form(); ?> <!-- outputs the default Wordpress search form-->
      </div><!--noResults-->
    <?php endif; ?>
    </div>
    <?php if(function_exists('wp_pagenavi')) : ?>
	<?php wp_pagenavi(); ?>
<?php else : ?>
    <?php if ( $wp_query->max_num_pages > 1 ) : ?>
      <nav class="oldernewer">
        <div class="older">
          <?php next_posts_link('&laquo; Antigas') ?>
        </div><!--.older-->
        <div class="newer">
          <?php previous_posts_link('Novas &raquo;') ?>
        </div><!--.newer-->
      </nav><!--.oldernewer-->
    <?php endif; ?>
    <?php endif; ?>
	</div>
	</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
