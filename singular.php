<div class='container justify-content-center px-3 my-3 border-dark'>
<div class="row"> 

    <div class="col-9 ">
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
        <div id="author-bio">

            <div id="author-avatar" class='d-inline-block rounded-circle'><?php echo get_avatar( get_the_author_meta('ID'), $args['96'], '', 'avatar', array('class' => 'rounded-circle') ); ?>
            <div id="author-details" class='d-inline-block'>
              <h4 class = "font-weight-bold" ><?php esc_html_e( 'a post by', 'text_domain' ); ?></strong> <?php the_author_posts_link(); ?></h4>
            <?php the_author_description(); ?>
            </div><!-- #author-details -->

            </div><!-- #author-bio -->
        </div>
        </div>

                <div class="col-3 py-3 border-left-3">
                <h5 class='font-weight-bold'> More Posts </h4>

                <div class="card mt-3" style="width: 18rem;">
                <img src='<?php echo get_the_post_thumbnail_url() ?>' class="card-img-top" alt='<?php echo get_the_post_thumbnail_url() ?>'>
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <p class="card-text"><?php the_excerpt() ?></p>
                    <a href="<?php the_permalink() ?>"class="btn btn-primary">READ MORE</a>
                </div>
                </div>

                <div class="card mt-3" style="width: 18rem;">
                <img src='<?php echo get_the_post_thumbnail_url() ?>' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <p class="card-text"><?php the_excerpt() ?></p>
                    <a href="<?php the_permalink() ?>"class="btn btn-primary">READ MORE</a>
                </div>

                </div>
                <div class="card mt-3" style="width: 18rem;">
                <img src='<?php echo get_the_post_thumbnail_url() ?>' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <p class="card-text"><?php the_excerpt() ?></p>
                    <a href="<?php the_permalink() ?>" class="btn btn-primary">READ MORE</a>
                </div>
                </div>

                <div class="card mt-3" style="width: 18rem;">
                <img src='<?php echo get_the_post_thumbnail_url() ?>' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <p class="card-text"><?php the_excerpt() ?></p>
                    <a href="<?php the_permalink() ?>"class="btn btn-primary">READ MORE</a>
                </div>
                </div>
                </div>

</div>
</div>