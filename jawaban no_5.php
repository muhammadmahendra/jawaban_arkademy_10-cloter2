<?php
function sort_array($array)
{
    asort($array);
    foreach ($array as $x => $x_value) {
        rsort($x_value);
        $array[$x] = $x_value;
    }
    $hitung_count = count($array);
    if($hitung_count <= 2){
         $hasil1 = $array[0][0];
         $hasil2 = $array[1][0];
         $array = array($hasil1,$hasil2);
         print_r($array);
    }else{
        $hasil1 = $array[0][0];
        $hasil2 = $array[1][0];
        $hasil3 = $array[2][0];
        $array = array($hasil1,$hasil2,$hasil3);
        print_r($array);
    }

}
$data = [['a','c','b','e','d'],['g','e','f']];
$datalain = [ ['g','h','x','j'], ['a','c','b','e','d'], ['q','w','a'] ];
sort_array($data);