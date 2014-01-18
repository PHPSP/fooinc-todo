<?php
$map = [
    'Foobar\\Context\\Index'     => 'app/library/Foobar/Context/Index.php',
    'Foobar\\Context\\IndexTest' => 'tests/Foobar/Context/IndexTest.php'
];

spl_autoload_register(
    function($className) use ($map){
        if(isset($map[$className])){
            require_once $map[$className];
            return true;
        }
    }
);