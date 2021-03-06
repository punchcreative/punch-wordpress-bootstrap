<?php 
if ( is_home() ) :
	wpb_header( 'navbar' );
elseif ( is_front_page() ) :
	wpb_header( 'home' );
elseif ( is_404() ) :
	wpb_header( '404' );
else :
	wpb_header( 'navbar' );
endif;
?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col col-lg-12 clearfix" role="main">
                    <header>
                    
                    <div class="post-header">
                        <?php
                        // $postid = get_the_ID();
                        // $pageHeaderTitel = get_post_meta($postid, 'page-header-titel', true);
                        ?>
                        <table id="post-header-collumns" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="tp-zorgcirkels-1" width="20%"><img src="<?php echo get_template_directory_uri(); ?>/library/wpb/images/spacer.gif"></td>
                                <td class="tp-zorgcirkels-2" width="20%"><img src="<?php echo get_template_directory_uri(); ?>/library/wpb/images/spacer.gif"></td>
                                <td class="tp-zorgcirkels-3" width="20%"><img src="<?php echo get_template_directory_uri(); ?>/library/wpb/images/spacer.gif"></td>
                                <td class="tp-zorgcirkels-4"><div class="post-header-title text-right"><?php _e("Search Results for","wpbootstrap"); ?>: <?php echo esc_attr(get_search_query()); ?></div></td>
                            </tr>
                        </table>
                    </div>
                
               		</header> <!-- end article header -->

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<div class="alert alert-zorgcirkels" role="alert">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							
							<!-- <p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p> -->
						
						</header> <!-- end article header -->
					
						<section>
							<?php the_excerpt('<span class="read-more">' . __("Read more on","wpbootstrap") . ' "'.the_title('', '', false).'" &raquo;</span>'); ?>
					
						</section> <!-- end article section -->
						
						<!-- <footer>
							
						</footer> --> <!-- end article footer -->
					
					</article> <!-- end article -->
                    </div>
					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
							</ul>
						</nav>
					<?php } ?>			
					
					<?php else : ?>
					
					<!-- this area shows up if there are no results -->
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    			
    			<?php // get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php wpb_footer(); ?>