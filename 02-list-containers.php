<?php

include '00-auth.php';

// Optional - no need to include these for now
//$params = array('limit' => 1, 'prefix' => 'my_');

// Get back something that can be iterated over
$containers = $swift->listContainers($params);

foreach ($containers as $container) {
  printf("Container name: %s\n", $container->getName());
}

/**
 * BONUS POINTS
 *
 * See the $params array above? Try experimenting with it 
 * to filter results. Supported params are:
 *
 * - prefix     ; allows you to limit results by how their names begin
 * - limit      ; allows you to specify how many results you get back
 * - marker     ; allows you to start from a certain container name
 * - end_marker ; allows you to work back from a certain container name
 */
