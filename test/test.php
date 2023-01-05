<?php
require('vendor/autoload.php');

use AssetsCountryService\AssetsCountry;

$class = new AssetsCountry();

var_dump($class->getAssetsCountryFlagByCountryCode());
var_dump($class->getAssetsCountryFlagByPhoneCode());

var_dump($class->getCountryFlagByColumn());
 