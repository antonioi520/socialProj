<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 7/31/2018
 * Time: 1:20 AM
 */
function load_lib($class) {
    include 'models/'.$class . '.php';
};
spl_autoload_register('load_lib');