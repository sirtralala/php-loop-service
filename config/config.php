<?php

// Fehlermeldungen des PhP Interpreters
error_reporting(E_ALL);

// Dateien in anderen Dateien einfügen
include "controller/selectLoop.php";
include "models/loops.php";
include "views/displayResult.php";

// Konstante erzeugen und in jedem File der Anwendung verfügbar machen
define("DATAPATH", 'C:\xampp\htdocs\Uebung2_php_loops\data\\');

