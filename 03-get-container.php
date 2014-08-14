<?php

include '00-auth.php';

$containerName = '';

$container = $swift->getContainer($containerName);

printf('Container name: %s\n', $container->getName());

/**
 * BONUS ACTIVITY: How can you use the $container object
 * to find its URL?
 */
