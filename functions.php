<?php

// Fibonacci Fucntion
function NextFib($f1, $f2){
    return($f1 + $f2);
}
function Fibonacci($data){
    // fn-1
    $f1 = $data["f1"];
    // fn
    $f2 = $data["f2"];
    // rest 
    $rest = $f1.', '. $f2;


    for ($i=0; $i < $data["Un"]-2; $i++) { 
        $fn = NextFib($f1, $f2);
        $f1 = $f2;
        $f2 = $fn;
        $rest .= ', '. $fn;
        
    }

    $data["rest"] = $rest;
    return $data;
}

// Aritmatika Function
function NextArt($a, $b){
    return($a + $b);
}
function Aritmatika($data){
    // a
    $a = $data["a"];
    // Sn
    $sn = $a;
    // rest
    $rest = $a;


    for ($i=0; $i < $data["Un"]-1; $i++) { 
        $un = NextArt($a, $data["b"]);
        $a = $un;
        $sn += $a;
        $rest .= ', '. $a;
        
    }    
    $rest .= '. ( S'.$data["Un"].' = '.$sn.' )';
    $data["rest"] = $rest;
    return $data;
}