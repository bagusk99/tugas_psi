<?php

function convert_to_reamur($celsius)
{
    return $celsius * 4/5;
}

$celsius = [];

for ($i=0; $i < 15; $i++) { 
    $celsius[] = random_int(30, 99);
}

foreach ($celsius as $row) {
    $reamur = convert_to_reamur($row);

    echo "{$row} °C = {$reamur} °Ré <br>";
}