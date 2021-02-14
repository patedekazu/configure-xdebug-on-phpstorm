<?php

$l = [];
for ($i = 0; $i < 100; ++$i) {
    $l[] = $i;
}

$s = "Hello, Xdebug!";

var_dump($l);

phpinfo();
