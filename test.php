<?php 

function number_generator($min_num = 1, $max_num = 1000){
    
        $numbers = range($min_num, $max_num);

        shuffle($numbers);

        return $numbers;

}

    $pic_number = number_generator();

    echo $pic_number[2];
