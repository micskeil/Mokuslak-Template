<div class = "container-fluid sticky-top shadow-sm bg-light"> 
    <nav class="container navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <div class="d-inline-block align-left" alt=""> 
          <?php the_custom_logo() ?> 
        </div>
        <a href="<?php 
            get_bloginfo('url')?>" class="navbar-brand d-none d-xl-inline-block ml-3">
          <?php 
            printf( get_bloginfo('name') . ' ' . get_bloginfo('description')); ?>
        </a>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">

      <a class="navbar-nav mr-auto">
        <div class="nav justify-content-end">
        <div class="navbar-nav">
          <a class="nav-item">
            <a class="nav-link" href="#">A HÁZ/THE HOUSE</a>
          </a>
          <a class="nav-item">
            <a class="nav-link" href="#">TALÁLJ MEG/FIND US</a>
          </a>
        
          <form class="nav-item d-sm-block d-md-none d-lg-block d-xl-block">
            <button class="btn btn-outline-success" type="button">RESERVATION/FOGLALÁS</button>
          </form>
          <a href="https://www.facebook.com/nagymarosiMokuslak" class="nav-item">
            <img src="./wp-content/themes/mokuslak/img/fb-icon.svg" width="40px" height="40px" class="nav-link" alt="">
          </a>
          <a href="https://www.instagram.com/mokuslak/" class="nav-item">
            <img src="./wp-content/themes/mokuslak/img/instagram-icon.svg" width="40px" height="40px" class="nav-link" alt="">
          </a>
        </div>
        </div>
        </a>
      </div>   
    </nav> 
     
</div>