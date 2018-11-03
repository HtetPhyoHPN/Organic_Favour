<?php
class Redirect {
    public static function to($location) {
        if($location) {
            if(is_nummeric($location)) {
                switch($location) {
                    case 404:
                        header('HTTP/1.0 404 Not Found');
                        include 'includes/errors/404.php';
                        exit();
                    break;
                }
            } else {
                header("Location: $location");
                exit();
            }
        }
    }
}

/* function redirect($path) {
	header ("Location: $path");
} Redirect::to('index.php');*/
