<?php


$total = 0;

function getTotal()
{
    global $total;
    for ($i = 0; $i < 10; $i++) {
        $total += $i;
    }
}


getTotal();
getTotal();
getTotal();

echo "Total " . $total;
