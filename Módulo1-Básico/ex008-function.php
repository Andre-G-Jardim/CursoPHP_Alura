<?php 

    //FUNÇÂO
    function soma(float $n1, float $n2)
    {
        return $n1 + $n2;
    }

    echo soma(2, 3) . PHP_EOL;

    //SUBROTINA
    function multiplica(float $n1, float $n2)
    {
        $result = $n1 * $n2;
        echo $result;
    }

    multiplica(2, 3);

    
?>