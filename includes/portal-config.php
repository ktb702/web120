<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
//ob_start();

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//die;

switch(THIS_PAGE){
        
    case 'index.php':
        $title = "Kate's WEB120 Title Page";
        $pageID = 'Welcome';
    break;
    
    case 'big/index.php':
        $title = "BIG";
        $pageID = 'BIG';
    break;
        
    case 'aia.php':
        $title = "Audience, Issues and Approach";
        $pageID = 'AIA';
    break;

    case 'flowchart.php':
        $title = "Flowchart";
        $pageID = 'Flowchart';
    break;
        
    case 'fp/index.php':
        $title = "Final Project";
        $pageID = 'Final Project';
    break;
        
    case 'contactme.php':
        $title = "Contact Kate";
        $pageID = 'Contact Kate';
    break;
        
    default:
        $title = THIS_PAGE;
//        $logo = 'fa-home';
        $pageID = 'Welcome';
}

$nav1['index.php'] = 'Welcome';
$nav1['big/index.php'] = 'Big';
$nav1['aia.php'] = 'AIA';
$nav1['flowchart.php'] = 'Flowchart';
$nav1['fp/index.php'] = 'Final Project';
$nav1['contactme.php'] = 'Contact Kate';
    
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
