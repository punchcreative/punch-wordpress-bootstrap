<div id="content" class="clearfix row">

    <div id="main" class="col col-lg-12 clearfix" role="main">
            
            <header>
                
                <div class="post-header">
                	<h1><?php _e("Epic 404 - Article Not Found","wpbootstrap"); ?></h1>
                    <p><?php _e("This is embarassing. We can't find what you were looking for.","wpbootstrap"); ?></p>
                </div>
            
            </header> <!-- end article header -->
        
            <section class="post_content">
                <p><?php _e("Whatever you were looking for was not found, but maybe try looking again or search using the form below.","wpbootstrap"); ?></p>

                <div class="row zoek-404">
                    <div class="col col-sm-12 col-lg-4">
                        <?php get_search_form(); ?>
                    </div>
                </div>
        
            </section> <!-- end article section -->

        </div> <!-- end #main -->

</div> <!-- end #content -->