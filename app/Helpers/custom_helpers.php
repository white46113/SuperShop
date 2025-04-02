<?php

if (!function_exists('pr')) {
     function pr($data = [],$exit = 0){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        if($exit == 1){
            die;
        }
    }
   
}

if (!function_exists('is_valid_array')) {
    function is_valid_array($data = []) {
        if(is_array($data) && count($data) > 0){
            return true;
        }
        return false;
    }
}
