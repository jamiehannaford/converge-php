<?php

include '00-auth.php';

// Select your container name
$containerName = 'test_3';

// Retrieve the container details
$container = $swift->getContainer($containerName);

printf("Container name: %s\n", $container->getName());

/**
 * BONUS ACTIVITY: How can you use the $container object
 * to find its URL?
 */

//printf("Container URL: %s\n", $container->something());
