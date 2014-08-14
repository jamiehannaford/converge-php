<?php

include '00-auth.php';

// What is the container name?
$containerName = '';

$container = $swift->getContainer($containerName);

// Where is the directory you want to upload?
$localDir = '/Users/jamie/jekyll-blog/_site';

// Upload it!
$container->uploadDirectory($localDir);
