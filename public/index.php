<?php

require_once __DIR__ . '/../vendor/autoload.php';

use LeanCloud\Client;
use LeanCloud\Engine\LeanEngine;
use LeanCloud\Engine\Cloud;

Client::initialize(
    'YdM3seVziUONl3SeKSghJL9t-gzGzoHsz',
    'R6TmpO2LKDPzADQlVdFfNt2B',
    '3reQoMfJM9l8eWDbnxjkDqqO'
);


$engine = new LeanEngine();
$engine->start();
