<?php 
function dd($data){
    echo '<pre>';
    var_dump(func_get_args($data));
    echo '</pre>';
    die();

}