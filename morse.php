<?php 

define("ESPACIO", " ");

$morseCodes = array(
'A'=>'.-',
'B'=>'-...',
'C'=>'-.-.',
'D'=>'-..',
'E'=>'.',
'F'=>'..-.',
'G'=>'--.',
'H'=>'....',
'I'=>'..',
'J'=>'.---',
'K'=>'-.-',
'L'=>'.-..',
'M'=>'--',
'N'=>'-.',
'O'=>'---',
'P'=>'.--.',
'Q'=>'--.-',
'R'=>'.-.',
'S'=>'...',
'T'=>'-',
'U'=>'..-',
'V'=>'...-',
'W'=>'.--',
'X'=>'-..-',
'Y'=>'-.--',
'Z'=>'--..',
'1'=>'.----',
'2'=>'..---',
'3'=>'...--',
'4'=>'....-',
'5'=>'.....',
'6'=>'-....',
'7'=>'--...',
'8'=>'---..',
'9'=>'----.',
'0'=>'-----',
', '=>'--..--',
'.'=>'.-.-.-',
'?'=>'..--..',
'/'=>'-..-.',
'-'=>'-....-',
'('=>'-.--.',
')'=>'-.--.-' 
);

function encryptMorse($mensaje, $morseCodes){
    $mensaje = strtoupper($mensaje);
    $cipher = "";
    for($i = 0; $i <= (strlen($mensaje) - 1); $i++){
        $cipher .= $mensaje[$i] != " " ? $morseCodes[$mensaje[$i]] : " ";
    }
    return $cipher;
}

function decryptMorse($mensaje, $morseCodes){
$message = " ";
$decipher = "";
$citext = "";

for($i = 0; $i <= (strlen($mensaje) - 1); $i++){
if($mensaje[$i] != " "){
            $val = 0
            $citext += letter
        } else {
           $val += 1

            if($val == 2){
                $decipher += " "
            } else {
                foreach($morseCodes as key => value in MORSE_CODE_DICT.items():
                    if citext == value:
                        decipher += key

                citext = ""
}
    return decipher

echo encryptMorse("rafael", $morseCodes);