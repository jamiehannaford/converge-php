<?php

include '00-auth.php';

$container = $swift->getContainer('test_3');
$object = $container->getObject('lord_of_the_pug.jpg');

// Set X-Delete-After header on an object
$object->saveMetadata(['X-Delete-After' => 20], false);

// Experiment with example HTML!

/**
 * BONUS ACTIVITY
 *
 * Set some arbitrary metadata!
 */
