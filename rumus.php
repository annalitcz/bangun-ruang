<?php
//1.kubus
function vKubus ($s) {
    return pow($s,3);
}
function lpKubus($s){
    return 6 * pow($s, 2);
}
//2.balok
function vBalok($p, $l, $t){
    return $p * $l * $t;
}
function lpBalok($p, $l, $t){
    return 2 * ($p * $l + $p * $t + $l * $t);
}
//3.bola
function vBola($r){
    return 4/3 * pi() * pow($r,3);
}
function lpBola($r){
    return 4 * pi() * pow($r,2);
}
//4.kerucut
function vKerucut($r, $t){
    return 1/3 * pi() * pow($r,2) * $t;
}
function lpKerucut($r, $t){
    $s = sqrt(pow($r, 2) + pow($t, 2));
    return pi() * $r * ($r + $s);
}
//5.limas
function vLimas($p, $l, $t){
    return 1/3 * $p * $l * $t;
}
function lpLimas($p, $l, $t) { 
   return $p * $l + $p * sqrt(pow($l/2, 2) + pow($t, 2)) + $l * sqrt(pow($p/2, 2) + pow($t, 2));
}

//6.prisma
function lpPrisma($ka, $st, $la) {
    return ($st * $ka) + (2 * $la);
  }
  
function vPrisma($la, $tp) {
    return $la * $tp;
}

//7.tabung
function lpTabung($r, $t){
    return 2 * pi() * $r *$t + 2 * pi() * pow($r,2);
}
function vTabung($r, $t){
    return pi() * pow($r,2) * $t;
}