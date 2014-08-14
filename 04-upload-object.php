<?php

include '00-auth.php';

// What is the name of your container?
$containerName = '';

$container = $swift->getContainer($containerName);

// What file are you trying to upload?
$localPath  = '/Users/jamie/Documents/foo.txt';

// What do you want this file to be called on the API?
$remoteName = 'my_document.txt';

// Upload it!
$container->uploadObject($remoteName, fopen($localPath, 'r+'));
