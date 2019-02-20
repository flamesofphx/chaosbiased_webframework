<?php
header( "Cache-Control: no-cache, must-revalidate" );
header( "Pragma: no-cache" );
function pickRandomGallery($min = 1, $max = 11) {
    if (function_exists('random_int')):
        return random_int($min, $max); 
    elseif (function_exists('mt_rand')):
        return mt_rand($min, $max); 
    endif;
    return rand($min, $max); 
}

$hrefpick = pickRandomGallery();

switch ($hrefpick) {
	case 1:
	$galchoice = "pano.php";
	break;
	case 2:
	$galchoice = "family.php";
	break;	
	case 3:
	$galchoice = "gold.php";
	break;	
	case 4:
	$galchoice = "showtucs.php";
	break;	
	case 5:
	$galchoice = "botan.php";
	break;
	case 6:
	$galchoice = "asu.php";
	break;	
	case 7:
	$galchoice = "flag.php";
	break;	
	case 8:
	$galchoice = "azb.php";
	break;
	case 9:
	$galchoice = "shlp.php";
	break;	
	case 10:
	$galchoice = "ashfork.php";
	break;	
	case 11:
	$galchoice = "sl.php";
	break;	
}
?>