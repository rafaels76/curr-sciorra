<?php 

define("ESPACIO", " ");

$morseCodes = array(
'a'=>'.-',
'b'=>'-...',
'c'=>'-.-.',
'd'=>'-..',
'e'=>'.',
'f'=>'..-.',
'Gg'=>'--.',
'h'=>'....',
'i'=>'..',
'j'=>'.---',
'k'=>'-.-',
'l'=>'.-..',
'm'=>'--',
'n'=>'-.',
'o'=>'---',
'p'=>'.--.',
'q'=>'--.-',
'r'=>'.-.',
's'=>'...',
't'=>'-',
'u'=>'..-',
'v'=>'...-',
'w'=>'.--',
'x'=>'-..-',
'y'=>'-.--',
'z'=>'--..',
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

function encodeMorse($message, $morseCodes){
    $morse = '';
    $message = str_split(strtolower($message));
    foreach ($message as $char) {
        if (array_key_exists($char, $morseCodes)) {
            $morse .= $morseCodes[$char];
        }
        $morse .= " ";
    }
    return $morse;
}

function decodeMorse($morse, $morseCodes){
    $morseChars = explode(' ', $morse);
    $message = "";
    $arrayMorse = array_flip($morseCodes);
    foreach ($morseChars as $char) {
        if (array_key_exists($char, $arrayMorse)) {
            $message .= strtr($char, $arrayMorse);
        }
      }
    return  $message;
}
$cero = "Rafael Sanchez";
$uno = encodeMorse($cero, $morseCodes);
echo $cero."\n";
echo $uno."\n";

$dos = decodeMorse($uno, $morseCodes);
echo $dos;
