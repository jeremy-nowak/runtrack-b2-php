<?php

function my_str_size(string $str){
    $i = 0;
    while (isset($str[$i])) {
        $i++;
    }

    return $i;

}

function my_str_reverse(string $string) : string {
    $reverse_string = "";

    $size = my_str_size($string);

    for($i = $size-1; $i >=  0; $i-- ){

        $reverse_string .= $string[$i];
    }
    return $reverse_string;
    
}
echo my_str_reverse("hello")
?>