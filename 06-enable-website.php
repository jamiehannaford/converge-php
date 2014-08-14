<?php

include '00-auth.php';

// We first need to enable public access to our private container
$container->enableCdn();


// Now tell the API to treat this file as the landing page
$container->setStaticIndexPage($indexFile);


// Activity: create an error html file locally, and then upload it to your container


// Finally, tell the API to treat this file as the default error page
$container->setStaticErrorPage('error.html');

/**
 * BONUS ACTIVITY
 *
 * 1. How do you make your CDN-enabled container more responsive to changes? Since 
 *    it's sitting behind a CDN, can you somehow modify the TTL?
 *
 * 2. Another option is to try and purge objects from the cache. Note: this can 
 *    take up to 15-30 minutes to complete - so although you won't directly see 
 *    the results before the workshop finishes, it's nice to know how to do it.
 */
