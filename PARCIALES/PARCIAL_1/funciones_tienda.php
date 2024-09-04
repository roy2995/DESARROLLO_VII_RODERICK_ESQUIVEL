<?php
function calcular_descuento($total_compra){
    if($total_compra > 1000){
        return $total_compra * 0.15;
    }
    elseif($total_compra >= 501){
        return $total_compra * 0.10;
    }
    elseif($total_compra >= 100){
        return $total_compra * 0.5;
    }
    else{
        return 0;
    }
}

function aplicar_impuesto($subtotal){
    return $subtotal * 0.07;
}

function calcular_total($subtotal, $descuento, $impuesto){
    return $subtotal - $descuento + $impuesto;
}

?>
