<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta name="generator" content=
    "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org"/>
    <meta http-equiv="Content-Type" content="text/html; charset=us-ascii"/>
    <script src="js/jquery-1.10.2.min.js" type="text/javascript">
    </script>
    <script src="js/common.js" type="text/javascript">
    </script>
    <link href="style/default.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="icon" href="images/logo_la_small.png" type="image/png" sizes="16x16"/>
    <meta name="description" content=
    "A NGO that ensures donors reach out to authentic causes"/>
    <meta name="keywords" content="NGO Delhi Chronic Diseases Support"/>
    <meta name="author" content="luckyakhi"/>
    <meta name="robots" content="index, follow"/>
    <meta name="revisit-after" content="1 day"/>

    <title>Samikshya Society</title>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php
include "functions.php";
//include "dbConnect.php";
?>

<div id="wrapper">
    <div id="header">
       <img id="logo" src="images/logo_la_medium.png"/>&nbsp;<h1>Samikshya Society</h1>
        <div id="contactInfo">
            <img src="images/dialer.png"/>&nbsp;+91-9999628852&nbsp;+91-9971912752
            <br/>
            <br/>
            <img src="images/envelope.png"/>&nbsp;support@samikshya.org
       </div>
        <div id="socialMediaDiv">
            <div id="fbDiv">
            <div class="fb-like" data-href="http://www.samikshya.org" data-width="500" data-layout="standard" data-action="like"
                 data-show-faces="false" data-share="true">
            </div>
            </div>

           <div id="twitterDiv">
               <a href="https://twitter.com/samikshya_soc" id="twitterHandle" target="_BLANK"><img src="images/twitter.png"/> </a>
               <a href="https://twitter.com/share" class="twitter-share-button" data-via="samikshya_soc" data-hashtags="SamishyaSociety">Tweet</a>
               <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
               <a href="https://twitter.com/samikshya_soc" class="twitter-follow-button" data-show-count="false">Follow @samikshya_soc</a>
               <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
           </div>

        </div>
  </div>
    <div id="nav">
            <a href="index.php?p=home">Home</a>
            <a href="index.php?p=aims">Vision</a>
            <a href="index.php?p=registration">Join us</a>
            <a href="index.php?p=donations">Support us</a>
        <a href="index.php?p=aboutUs">About us</a>
            <a href="index.php?p=contactUs">Contact us</a>
           <!-- <a href="gallery/index.php">Gallery</a> -->
    </div>
    <?php include getPageURL();?>

    <div id="footer">
        <p style="margin-top:50px;text-align:center;font-size:1.0em;">All rights reserved &copy; 2015
            Samikshya Society
        </p>
        <br/>
        <p id="luckyakhi">Powered by <a href="http://luckyakhi.com" target="_blank">www.luckyakhi.com</a> </p>
    </div>
</div>
<?php
//if (getPageURL()!="home.php"){
  //  echo "<script language='JavaScript' type='text/javascript'>clearInterval(imageGalleryTimer)</script>";
//}
?>
</body>
</html>