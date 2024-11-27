<?php

function urls($url){
    return $_SERVER["REQUEST_URI"]==$url;
}
 
    function dd($x){
        echo "<pre>";
            var_dump($x);
        echo "</pre>";
    }


    

?>