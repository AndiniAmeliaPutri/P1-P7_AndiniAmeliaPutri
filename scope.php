<?php

$x = 10;

function tes_scope() {
    global $x;
    echo $x;
}

tes_scope();

?>