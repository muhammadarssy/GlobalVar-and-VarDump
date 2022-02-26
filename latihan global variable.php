<?php

$z = 'handal';

function a(){
    global $a;
    $a = 'saya';
    function b(){
        global $b;
        $b = 'programer';
        function c(){
            global $z, $a, $b;
            $c = 'web';
            echo $a, $b, $c, $z;
        }
    }
}

a();
b();
c();

?>