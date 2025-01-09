<?php
function generar_Boleto(){
    $boleto=array();
    for ($i=0;$i<8;$i++){
        $num=rand(1,49);
        if (isNumero($boleto,$num))
            $i--;
        else
            $boleto[$i]=$num;
    }
    sort($boleto);
    return $boleto;
}

function pintar_Boleto($boleto){
    $cadenaHTML="";
    $cadena='<table ><tr>';
    for ($i=0;$i<8;$i++){
        $cadena=$cadena.'<td>'.$boleto[$i].'</td>';
    }
    $cadena=$cadena.'</tr></table>';
    return $cadena;
}

function isNumero($boleto, $numero){
    $LIM=count($boleto);
    for ($i=0;$i<$LIM;$i++){
        if ($boleto[$i]==$numero)
            return true;
    }
    return false;
}



?>