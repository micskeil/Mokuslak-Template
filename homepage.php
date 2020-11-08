<?php

$homepage = true;
$current_page = "home";
// include('sections/sticky-nav.php');

?>

<div class='container-fluid text-justify'>
  
   <?php
   
     if(have_posts()) {
       while(have_posts()) {
          the_content();
       }
     }
    ?>
     
  
</div>
      