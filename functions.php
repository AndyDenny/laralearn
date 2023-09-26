<?php
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($url){
    return $_SERVER['REQUEST_URI'] == $url;
}

function authorize($condition, $statusCode = Response::FORBIDDEN ){

    if(!$condition){
        abort($statusCode);
    }
    
}

function base_path($path){
    return BASE_PATH . $path;
}

function view($path,$attributes = []){

    extract($attributes);
    
    require base_path('views/'.$path);

}