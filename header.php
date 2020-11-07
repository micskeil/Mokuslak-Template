<?php

header("Cache-Control: max-age=31536000");
$current_page = "";
$homepage = false;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <?php 
    wp_head();
    ?>
    
    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" type="image/png" sizes="512x512" lazyload>
    <link rel="icon" href="favicon-sm.png" sizes="16x16" type="image/png" lazyload>

    <!-- Responsiblity & Caching -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-control" content="public">

    <!-- Meta SEO data -->

    <meta name="description" content="Nagymaros ">

    <!-- Open Graph Data -->
    <meta property="og:image" content="img/og-img.jpg">
    <meta property="og:title" content="Nagymarosi Mókuslak">
    <meta property="og:description" content="">
  
  </head>

        <?php
          if(isset($_POST['submit'])){
          		$to = "micskeil@gmail.com"; // this is your Email address
		          $to2 = "dina.iarenchuk@gmail.com"; // this is your Email address
		          $from = $_POST['introducee_email']; // this is the sender's Email address
		          $referer_name = $_POST['referer_name'];
		          $introducee_name = $_POST['introducee_name'];
		          $introducee_email = $_POST['introducee_email'];
		          $introducee_phone = $_POST['introducee_phone'];
		          $subject = "[bnbnMore Website] New referral";
		          $message = $referer_name . " Referred us to him: " . $introducee_name . "\nEmail:" . $introducee_email . "\nPhone number:" . $introducee_phone;

		          $headers = "From:" . $from;
		          mail($to,$subject,$message,$headers);
		          mail($to2,$subject,$message,$headers);
		          echo "<div style='width: 100%; background: rgb(229, 99, 14); color: white; padding: 20px; text-align: center;'>" . REFERRAL_THANKYOU. "</div>";
          
        }
      ?>
