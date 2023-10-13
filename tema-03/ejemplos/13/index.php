<?php

    /* 

    Definir arrays

    */

    //Forma antigua
    $numeros = array(0 => 1, 1 => 5);

    print_r($numeros);
    echo "<BR>";

    //Forma que vamos a usar
    $nums = [1, 5];

    //Forma alternativa: $nums = array(1, 5);
    
    echo "<BR>";
    echo ($nums[1]);
    
    echo "<BR>";
    print_r($nums);

?>