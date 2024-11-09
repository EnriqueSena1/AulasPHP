<?php
$nome = [1,2,3,4,5,6,7,8,9,10];
$resultado= 0;

for( $i= 0; $i < count($nome); $i++ ){
    if($nome[$i] % 2 == 0)
    {
        $resultado = $resultado + $nome[$i];
    }
}
echo $resultado;
?>