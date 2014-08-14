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

/**
 * BONUS ACTIVITY
 *
 * 1. You can override the API's type guessing by explicitly providing 
 *    a Content-Type header. How do you do this?
 *
 * 2. You can provide any HTTP header in a similar way. Can you 
 *    override the Content-Disposition header so that your file will 
 *    always be downloaded as my-lovely-thing.mp3?
 */
