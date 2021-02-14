<?php
declare(strict_types=1);

$l = [];
for ($i = 0; $i < 100; ++$i) {
    $l[] = $i;
}

$s = "Hello, Xdebug!";

function repeatString(string $str, int $num): string
{
    return str_repeat($str, $num);
}

$repeated = repeatString("hello", 10);

phpinfo();
