<div class="container px-0">
  <div class = 'row mx-0'> 
    <div class="col-lg-9 col-md-12 px-3 ">
       <h3 class='font-weight-bold py-3'>
          <?php if ( have_posts()) {
                while( have_posts ()) {
                    the_post();
                    the_title();     
                }
            }
          ?>
        </h3>

        <img class="pb-3" width="100%" src='<?php echo get_the_post_thumbnail_url() ?>'>

    
        
        <?php 
            if ( have_posts()) {
                while( have_posts ()) {
                    the_post();
                    
                    the_content();
                }
            }
        ?>
        <div id="author-bio" class="py-3">

            <div id="author-avatar" class='d-inline-block rounded-circle'><?php echo get_avatar( get_the_author_meta('ID'), $args['96'], '', 'avatar', array('class' => 'rounded-circle') ); ?>
            <div id="author-details" class='d-inline-block'>
              <h4 class = "font-weight-bold" ><?php esc_html_e( 'a post by', 'text_domain' ); ?></strong> <?php the_author_posts_link(); ?></h4>
            <?php the_author_description(); ?>
            </div><!-- #author-details -->

            </div><!-- #author-bio -->
        </div>
        </div>

                <div class="col-lg-3 py-3 px-3 ">
                  <h5 class='font-weight-bold pb-3'> More Posts </h4>
                  <div id="sidebar-primary" class="sidebar">
                    <?php get_sidebar( 'primary' ); ?>
                  </div>
                </div>
    </div>
</div>
