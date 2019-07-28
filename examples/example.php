<?php

namespace SpencerMortensen\Human;

require __DIR__ . '/../vendor/autoload.php';

$seconds = 62;
list($value, $units) = Time::fromSeconds($seconds);
$unitsText = TimeUnits::get('eng', $value, $units);
echo "Time: {$value} {$unitsText}\n";

$bytes = 1419318883;
list($value, $units) = Data::fromBytes($bytes);
echo "Data: {$value} {$units}\n";

$ratio = .98;
$percentage = Percentage::fromRatio($ratio);
echo "Percentage: {$percentage}%\n";

$integer = 1419318883;
$number = Number::fromInteger($integer);
echo "Number: {$number}\n";
