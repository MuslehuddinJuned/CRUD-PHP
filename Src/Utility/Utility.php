<?php
namespace weDeves\Utility;
class Utility{
    public function debug($data = ''){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}