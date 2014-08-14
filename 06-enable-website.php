<?php

include '00-auth.php';

// We first need to enable public access to our private container
$container->enableCdn();


// Now tell the API to treat this file as the landing page
$container->setStaticIndexPage($indexFile);


// Activity: create an error html file locally, and then upload it to your container


// Finally, tell the API to treat this file as the default error page
$container->setStaticErrorPage('error.html');
