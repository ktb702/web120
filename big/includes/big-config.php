<?php

/*
big-config.php

Used to store all of our WEB120 (BIG) configuration information

*/

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
        
    case '../index.php':
        $title = "Portal Page";
        $pageID = 'Portal';
    break;
    
    case 'big.php':
        $title = "Home Page";
        $logo = 'fa-home';
        $pageID = 'BIG';
    break;
        
    case 'siteapp.php':
        $title = "Site vs App";
        $logo = 'fa-html5';
        $pageID = 'SiteApp';
    break;

    case 'galleries.php':
        $title = "Galleries";
        $logo = 'fa-camera-retro';
        $pageID = 'Galleries';
    break;
        
    case 'flexbox.php':
        $title = "Flexbox";
        $logo = 'fa-cube';
        $pageID = 'Flexbox';
    break;
        
    case 'shopping-cart.php':
        $title = "Shopping Carts";
        $logo = 'fa-shopping-basket';
        $pageID = 'Shopping Carts';
    break;

    case 'map.php':
        $title = "Map";
        $logo = 'fa-map-o';
        $pageID = 'Map';
    break;

    case 'calendar.php':
        $title = "Calendar";
        $logo = 'fa-calendar';
        $pageID = 'Calendar';
    break;

    case 'youtube.php':
        $title = "You Tube";
        $logo = 'fa-youtube-square';
        $pageID = 'You Tube';
    break;

    case 'webcam.php':
        $title = "WebCam";
        $logo = 'fa-eye';
        $pageID = 'WebCam';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $pageID = 'Home Page';
}

/*
$nav1['index.php'] = 'Welcome';
$nav1['big/big.php'] = 'Big';
$nav1['aia.php'] = 'AIA';
$nav1['flowchart.php'] = 'Flowchart';
$nav1['fp/index.php'] = 'Final Project';
$nav1['contactme.php'] = 'Contact Kate';*/ 
    
/*
Function to generate links and keep the highlight 
on the current page */
/*
<li><a href="../index.php"><i class="fa fa-fw fa-bank"></i>WEB120 Portal</a></li>
<li><a href="big.php" class="active"><i class="fa fa-fw fa-home"></i>Home</a></li>
<li><a href="siteapp.php"><i class="fa fa-fw fa-html5"></i>Site vs App</a></li>
<li><a href="galleries.php"><i class="fa fa-fw fa-camera-retro"></i>Galleries</a></li>
<li><a href="flexbox.php"><i class="fa fa-fw fa-cube"></i>Flexbox</a></li>
<li><a href="shopping-cart.php"><i class="fa fa-fw fa-shopping-basket"></i>Shopping Cart</a></li>
<li><a href="webcam.php"><i class="fa fa-fw fa-eye"></i>Web Cam</a></li>
*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"active\" href=\"$url\">$text</a></li>";
        }
        else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";             
        }
    }
    

?>
