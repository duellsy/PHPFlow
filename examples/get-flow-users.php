<?php

require __DIR__ . '/../vendor/autoload.php';

$results = \Fliiim\PHPFlow\PHPFlow::getFlowUsers("user_api_token", "company", "flow");
if (false !== $results) {
    print_r(json_decode($results));
}