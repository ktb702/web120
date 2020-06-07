<?php include 'fp-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>WEB120 Final Project</title>

  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta name="referrer" content="origin" />

  <link rel="stylesheet" href="css/fp.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/form.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>

 <body>
    <main class="wrapper">
    <header>
      <h1 class="title"> Great Northwest Trek </h1>
      <nav>
        <ul class="topnav" id="myTopnav">
          <?=makeLinks($nav1)?>
<!--
          <li><a href="fp.php" class="active">About Us</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="gallery.php">Photo Gallery</a></li>
          <li><a href="gear.php">Gear Reviews</a></li>
          <li><a href="contact.php">Contact Us!</a></li>
-->
          <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
        </ul>
      </nav>
    </header>

    <section>