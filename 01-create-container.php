<?php

include '00-auth.php';

// Select a name!
$containerName = 'awesome_converge_container';

// Create it!
$swift->createContainer($containerName);
