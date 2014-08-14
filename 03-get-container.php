<?php

include '00-auth.php';

$containerName = '';

$container = $swift->getContainer($containerName);

printf('Container name: %s\n', $container->getName());
