<?php

include '00-auth.php';

// What is the container name?
$containerName = 'test_3';

$container = $swift->getContainer($containerName);

// Where is the directory you want to upload?
$localDir = 'asset/';

// Upload it!
$container->uploadDirectory($localDir);

/**
 * BONUS ACTIVITY
 *
 * 1. What role do MD5 checksums play here? Try changing a local 
 *    file content and re-executing this operation. 
 *
 * 2. Try turning on HTTP logging so that you can see *all*
 *    the network traffic for your operations.
 */
