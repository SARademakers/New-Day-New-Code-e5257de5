<?php

$input = intval($argv[1]);
$geldeenheden = array(50, 20, 10, 5, 2, 1);

foreach ($geldeenheden as $value) {
    $restgeld = floor($input / $value);
    if ($restgeld >= 1) {
        $input = $input - ($value * $restgeld);
        echo $restgeld . " x " . $value . PHP_EOL;
    }
}
?>