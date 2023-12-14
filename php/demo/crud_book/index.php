<?php

define('BASEPATH', realpath(__DIR__));
// BASEPATH: D:\CODEGYM\CAC LOP\C1023I01-PH102\php\demo


require_once(BASEPATH . "/controller/bookController.php");

use Controller\BookController;

$parseUrl = parse_url($_SERVER['REQUEST_URI']);     // $parseUrl là 1 mảng có key 'path'


$controler = new BookController();
switch ($parseUrl['path']) {
    case '/': {
            $controler->showBooks();
        }
    case "/add": {
            $controler->showAddBook();
        }
}
