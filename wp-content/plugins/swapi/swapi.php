<?php
/*
* Plugin Name: Swapi
* Description: Pour voir du star wars!
* Version: 1.0
* Author: Groutch
* Author URI: http://www.github.com/Groutch
*/

function displaysw($adapi){
    $dispanswer="";
    $fileget = file_get_contents($adapi);
    $result = json_decode($fileget);
    foreach ($result as $key => $value){
        if (gettype ($value) == "string")
        {
            if ($key == "homeworld"){
                $fileg= file_get_contents($value);
                $res =json_decode($fileg);
                $dispanswer.=$key." : ".$res->name."<br>";
            }else{
                $dispanswer.=$key." : ".$value."<br>";
            }
        }
    }
    $dispanswer.="------ <br>"; 
    echo $dispanswer;
}

function getsw($atts, $content=null){
    $adapi="https://swapi.co/api/".$atts['type']."/".$content;
    displaysw($adapi);
}


function searchsw($atts, $content=null){
    $adapi="https://swapi.co/api/".$atts['type']."/?search=".$content;
    $fileget = file_get_contents($adapi);
    $result = json_decode($fileget);
    $adres = $result->results[0]->url;
    displaysw($adres);
    
}

add_shortcode('getsw', 'getsw');
add_shortcode('searchsw', 'searchsw');
?>