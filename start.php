<?php

require 'librarys/Smarty.class.php';


error_reporting(0);

// Smarty start.
// Variable $formulier toekennen.

$formulier = new Smarty();

// Map waar hij de "frontend" gaat ophalen & compilen.
$formulier->template_dir = "frontend";
$formulier->compile_dir = "frontend/compiled";

// Configuratie ophalen.
require 'config/config.php';
