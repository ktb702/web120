<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?=$title?></title>
     
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta name="referrer" content="origin">
     
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/form.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>

 <body>
    <main class="wrapper">
    <header>
      <h1 class="title">Kate Baldwin's WEB120 Portal </h1>
      <nav>
        <ul class="topnav" id="myTopnav">
            <?=makeLinks($nav1)?>
<!--
          <li><a href="index.php" class="active">Welcome</a></li>
          <li><a href="big/index.php">Big</a></li>
          <li><a href="aia.php">AIA</a></li>
          <li><a href="flowchart.php">Flowchart/Layout</a></li>
          <li><a href="fp/index.php">Final Project</a></li>
          <li><a href="contactme.php">Contact Kate</a></li>
-->
          <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
        </ul>
      </nav>
    </header>
    
    <!-- START LEFT COLUMN-->
    <section>

  
