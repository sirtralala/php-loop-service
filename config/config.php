<?php

// include error messages of PhP interpreter
error_reporting(E_ALL);

// import data structure
include "controller/Controller.php";
include "controller/Loop.php";
include "controller/forLoop/ForLoop.php";
include "controller/forEachLoop/ForEachLoop.php";
include "controller/whileLoop/WhileLoop.php";
include "views/DisplayResult.php";

// create constant, make available in each file
define("DATAPATH", 'C:\xampp\htdocs\php-loop-service-master\model\\');