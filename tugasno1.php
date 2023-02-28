<?php
$buah ="Jambu";

switch($buah) {
    case "Mangga":
        echo "Mangga manis dengan harga Rp 15.000.00 1kg", PHP_EOL;
    break;
    case "Klengkeng":
        echo "Klengkeng dengan harga Rp 60.000.00 1kg", PHP_EOL;
    break;
    case "Rambutan":
        echo "Rambutan dengan harga Rp 50.000.00 1kg", PHP_EOL;
    break;
    case "Jambu":
        echo "Jambu dengan harga Rp 30.000.00 1kg", PHP_EOL;
    break;
    default:
        echo "Durian dengan harga Rp 20.000.00 1kg", PHP_EOL;
    break;
}