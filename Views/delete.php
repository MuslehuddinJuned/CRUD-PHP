<?php
include_once ('../vendor/autoload.php');

$obj = new weDeves\Product\Product();
$obj->prepare($_GET)->delete();