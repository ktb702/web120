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
  <!-- <link rel="stylesheet" href="css/form.css" /> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>

 <body>
    <main class="wrapper">
    <header>
      <h1 class="title"> Great Northwest Trek </h1>
      <nav>
        <ul class="topnav" id="myTopnav">
          <li><a href="fp.php" class="active">About Us</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="gallery.php">Photo Gallery</a></li>
          <li><a href="gear.php">Gear Reviews</a></li>
          <li><a href="contact.php">Contact Us!</a></li>
          <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
        </ul>
      </nav>
    </header>

    <section>
       <h2 class="welcome">About Us</h2>
       <img class="desktop" src="images/placeholder800.jpg" alt="Placeholder image" />
       <img class="tablet" src="images/placeholder500.jpg" alt="Placeholder image" />
       <img class="phone" src="images/placeholder320.jpg" alt="Placeholder image" />
       <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    </section>

      <footer><small>&copy; <?php echo date("Y");?> by <a href="contactme.php" target="_blank">Kate Baldwin</a>, All Rights Reserved, <a href="http://validator.w3.org/check?uri=referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a></small></footer>
   
    </main>
  
  <script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
  </script>
 </body>
</html>