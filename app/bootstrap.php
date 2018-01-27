<?php
/**
 * Created by PhpStorm.
 * User: spider
 * Date: 1/25/18
 * Time: 6:21 PM
 */


//@- Load Config
require_once  'config/config.php';

//@ Load Libraries
require_once 'libraries/Core.php';
require_once 'libraries/Controller.php';
require_once 'libraries/Database.php';

//@- Autoload Core Libraries
spl_autoload_register(function ($className){
    require_once 'libraries/' . $className . '.php';
});


