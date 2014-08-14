<?php

include '00-auth.php';

// Optional
$params = [];

$containers = $swift->listContainers($params);

foreach ($containers as $container) {
  printf('Container name: %s\n', $container->getName());
}

/**
 * BONUS POINTS:
 *
 * See the $params array above? Try experimenting with it 
 * to filter results. Supported params are:
 *
 * - prefix
 * - limit
 * - marker
 * - end_marker
 */
