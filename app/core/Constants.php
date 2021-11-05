<?php
//BASE_URL static 
    // define('BASE_URL', "http://localhost/phpmvc/public");

//BASE_URL dinamis

    //method 1
    // define("BASE_URL","//".trim("{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}","/"));
    
    //method 2
    define("BASE_URL","//".dirname(trim("{$_SERVER['HTTP_HOST']}{$_SERVER['SCRIPT_NAME']}","/")));
?> 