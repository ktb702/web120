<?php

/*
fp-config.php

Used to store all configuration information for WEB120 Final Project
*/

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
        
    case 'fp.php':
        $title = "Great Northwest Trek";
        $pageID = 'Welcome';
    break;
    
    case 'blog.php':
        $title = "Blog";
        $pageID = 'Blog';
    break;
        
    case 'gallery.php':
        $title = "Photo Gallery";
        $pageID = 'Photo Gallery';
    break;

    case 'gear.php':
        $title = "Gear Reviews";
        $pageID = 'Gear Reviews';
    break;
        
    case 'contact.php':
        $title = "Contact Us";
        $pageID = 'Contact Us';
    break;
        
    default:
        $title = THIS_PAGE;
        $pageID = 'Welcome';
}

$nav1['fp.php'] = 'Welcome';
$nav1['blog.php'] = 'Blog';
$nav1['gallery.php'] = 'Photo Gallery';
$nav1['gear.php'] = 'Gear Reviews';
$nav1['contact.php'] = 'Contact Us';
    
/*
Function to generate links and keep the highlight 
on the current page */

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
    return $myReturn;
}

?>