<?php 
    
    $numero = 10;
    
    // Recebe um parâmetro por referência
    function aumentaUm(float &$num)
    {
        $num += 1;
    }

    aumentaUm($numero);
    echo $numero;
?>