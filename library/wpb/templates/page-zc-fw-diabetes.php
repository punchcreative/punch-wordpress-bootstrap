<div id="content" class="clearfix row">

    <div id="main" class="col-lg-12 clearfix" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
            
            <header>
                
                <div class="post-header">
                	<?php
					$postid = get_the_ID();
                    $pageHeaderTitel = get_post_meta($postid, 'page-header-titel', true);
					?>
                    <table id="post-header-collumns" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="tp-diabetes-1" width="20%"><img src="<?php echo get_template_directory_uri(); ?>/library/wpb/images/spacer.gif"></td>
                            <td class="tp-diabetes-2" width="20%"><img src="<?php echo get_template_directory_uri(); ?>/library/wpb/images/spacer.gif"></td>
                            <td class="tp-diabetes-3" width="20%"><img src="<?php echo get_template_directory_uri(); ?>/library/wpb/images/spacer.gif"></td>
                            <td class="tp-diabetes-4"><div class="post-header-title text-right"><?php echo $pageHeaderTitel; ?></div></td>
                        </tr>
                    </table>
                </div>
            
            </header> <!-- end article header -->
        
            <section class="post_content diabetes">
                <?php the_content(); ?>
        
            </section> <!-- end article section -->
        
        </article> <!-- end article -->
        
        <?php //comments_template(); ?>
        
        <?php endwhile; ?>	
        
        <?php else : ?>
        
        <article id="post-not-found">
            <header>
                <h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
            </header>
            <section class="post_content">
                <p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
            </section>
            <footer>
            </footer>
        </article>
        
        <?php endif; ?>

    </div> <!-- end #main -->

</div> <!-- end #content -->