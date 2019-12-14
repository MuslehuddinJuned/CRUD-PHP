<?php
include_once ('../vendor/autoload.php');
use weDeves\Product\Product;
$obj = new Product();
$obj->prepare($_POST)->store();