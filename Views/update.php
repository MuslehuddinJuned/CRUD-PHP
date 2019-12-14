<?php
include_once ('../vendor/autoload.php');

$obj = new weDeves\Product\Product();
$obj_1 = new weDeves\Utility\Utility();
$_POST['Id'] = $_SESSION['Id'];
$obj->prepare($_POST)->update();