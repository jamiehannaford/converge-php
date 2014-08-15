<?php

include '00-auth.php';

$containerName = 'test_3';
$container = $swift->getContainer($containerName);

// Temp URL
$object = $container->getObject('lord_of_the_pug.jpg');
echo $object->getTemporaryUrl(3600, 'GET');
