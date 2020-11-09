<div class = "container-fluid sticky-top shadow-sm bg-light border"> 
  <div class='container justify-content-between'>
    <nav class="navbar navbar-expand-md navbar-light px-0 bg-light">
    
      <!-- SITE LOGO AND SITE NAME, SITE TAG -->
      
      <div class="navbar-brand my-0">
        <a class="" alt="<?php 
            printf( get_bloginfo('name') . ' ' . get_bloginfo('description')); ?>"> 
          <?php the_custom_logo() ?> 
        </a>
        <a href="<?php 
            get_bloginfo('url')?>" class="navbar-brand d-none d-lg-inline-block">
          <?php 
            printf( get_bloginfo('name') . ' ' . get_bloginfo('description')); ?>
        </a>
      </div>

      <!-- TOGGLE BUTTON -->
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- SITE NAV MENU AND RESERVATION BUTTON, SOCIAL -->

      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">


      <div class="navbar-nav align-items-center justify-content-end">
              <?php wp_nav_menu(array(
                      'theme_location' => 'header-menu',
                      'depth'           =>  2, // 1 = no dropdowns, 2 = with dropdowns.
                      'container'       => 'div',
                      'container_class' => '',
                      'container_id'    => 'header-menu',
                      'menu_class'      => 'navbar-nav',
                      'fallback_cb'     => 'false',
                      'add_li_class'  => 'nav-link navbar-light',
                      'walker'         => new WP_Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                      'fallback_cb'    => 'WP_Bootstrap_NavWalker::fallback', // For menu fallback
                    ) );
              ?>  
        
          <form class="nav-item d-sm-block d-md-inline-block">
            <button class="btn btn-outline-success" type="button">RESERVATION/FOGLALÁS</button>
          </form>
          
          <a href="https://www.facebook.com/nagymarosiMokuslak" target="_blank" class="nav-item">
            <img src= "<?php echo(get_template_directory_uri())?>/img/fb-icon.svg" width="40px" height="40px" class="nav-link" alt="">
          </a>
          <a href="https://www.instagram.com/mokuslak/" target="_blank" class="nav-item">
            <img src="<?php echo(get_template_directory_uri())?>/img/instagram-icon.svg" width="40px" height="40px" class="nav-link" alt="">
          </a>
      </div>
      </div>   
    </nav> 
  </div>      
</div>