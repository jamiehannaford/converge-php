<?php

include '00-auth.php';

// Container name
$containerName = 'test_3';

// Get container details!
$container = $swift->getContainer($containerName);

// Temp URL
$object = $container->getObject('lord_of_the_pug.jpg');
echo $object->getTemporaryUrl(3600, 'GET');
