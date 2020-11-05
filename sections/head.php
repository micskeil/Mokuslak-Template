<?php

header("Cache-Control: max-age=31536000");
$current_page = "";
$homepage = false;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous" lazyload></script>
  <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous" lazyload></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous" lazyload>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous" lazyload></script>
    <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
  <script>
  grecaptcha.ready(function() {
      grecaptcha.execute('reCAPTCHA_site_key', {action: 'homepage'}).then(function(token) {
         ...
      });
  });
  </script>
  
<link href="https://fonts.googleapis.com/css?family=PT+Serif|Rufina:700" rel="stylesheet">

    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" lazyload>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" type="image/png" sizes="512x512" lazyload>
    <link rel="icon" href="favicon-sm.png" sizes="16x16" type="image/png" lazyload>

    <!-- Responsiblity & Caching -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-control" content="public">

    <!-- Meta SEO data -->
    <title>Nagymarosi Mókuslak</title>
    <meta name="description" content="Nagymaros ">

    <!-- Open Graph Data -->
    <meta property="og:image" content="img/og-img.jpg">
    <meta property="og:title" content="Nagymarosi Mókuslak">
    <meta property="og:description" content="">
  <?php

    session_start();

    $languages = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);

    foreach($languages as $lang)
    {
      if($lang == "hu-HU" && $_SESSION['lang'] != 'en') {
        $_SESSION['lang'] = "hu";
        break;
      }
    }

    // Set Language variable
    if(isset($_GET['lang']) && !empty($_GET['lang'])){
     $_SESSION['lang'] = $_GET['lang'];

     if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
      echo "<script type='text/javascript'> location.reload(); </script>";
     }
    }

    // Include Language file
    if(isset($_SESSION['lang'])){
     include "lang/lang_".$_SESSION['lang'].".php";
    }else{
     include "lang/lang_en.php";
    }

  ?>
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
