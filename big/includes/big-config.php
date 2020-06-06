<?php

/*
big-config.php

Used to store all of our WEB120 (BIG) configuration information

*/

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
        
    case '../index.php':
        $title = "WEB120 Portal";
        $logo = 'fa-bank';
        $pageID = 'Portal';
    break;
    
    case 'big.php':
        $title = "Home";
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

    case 'webcam.php':
        $title = "WebCam";
        $logo = 'fa-eye';
        $pageID = 'WebCam';
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
        $title = "YouTube";
        $logo = 'fa-youtube-square';
        $pageID = 'YouTube';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $pageID = 'Home Page';
}

$nav1['../index.php'] = 'WEB120 Portal';
$nav1['big.php'] = 'Home';
$nav1['siteapp.php'] = 'Site vs App';
$nav1['galleries.php'] = 'Galleries';
$nav1['flexbox.php'] = 'Flexbox';
$nav1['shopping-cart.php'] = 'Shopping Cart';
$nav1['webcam.php'] = 'Web Cam';

function makeLinks($nav1)
{
    //set a breakpoint for debugging
    // var_dump($config);
    // die;

    $myReturn = '';
    foreach($nav1 as $url => $text ){
        if($url == THIS_PAGE){
            // $myReturn .= '<li><a class="active" href="' . $url . '"><i class="fa fa-fw ' . $logo . '"></i>' . $text . '</a></li>'; 
            $myReturn .= "<li><a class=\"active\" href=\"$url\">$text</a></li>";
        }
        else{
            // $myReturn .= '<li><a href="' . $url . '"><i class="fa fa-fw ' . $logo . '"></i>' . $text . '</a></li>';
            $myReturn .= "<li><a href=\"$url\">$text</a></li>"; 
        }
    }
    
    return $myReturn;
}

?>
