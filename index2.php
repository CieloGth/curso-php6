<?php

// include 'greet.php';
// include 'greets.php'; peligro
// require 'greet.php';
// require 'greets.php'; error fatal
require_once 'greet.php'; //requiere una sola vez

echo greet('Cielo', '¿Como estas hoy?');