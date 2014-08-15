<?php

include '00-auth.php';

$containerName = 'test_3';

$container = $swift->getContainer($containerName);

printf("Container name: %s\n", $container->getName());

/**
 * BONUS ACTIVITY: How can you use the $container object
 * to find its URL?
 */

printf("Container URL: %s\n", $container->getUrl());
