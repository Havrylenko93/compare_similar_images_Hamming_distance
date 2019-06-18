<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use Jenssegers\ImageHash\ImageHash;
use Jenssegers\ImageHash\Implementations\DifferenceHash;

$hasher = new ImageHash(new DifferenceHash());

$originalImagePath = __DIR__ . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'original1.jpg';
$copyImagePath = __DIR__ . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'copy2.jpg';
$hash = $hasher->hash($originalImagePath);
$hash2 = $hasher->hash($copyImagePath);
$distance = $hasher->distance($hash, $hash2);

echo "<pre>";
var_dump($hash->toHex());
var_dump($hash2->toHex());
var_dump($distance);
echo "</pre>";
exit();
