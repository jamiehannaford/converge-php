<?php

require 'vendor/autoload.php';

use OpenCloud\Rackspace;
use Guzzle\Http\Exception\BadResponseException as HttpError;

// This is our base HTTP client
$client = new Rackspace(Rackspace::UK_IDENTITY_ENDPOINT, array(
  'username' => 'converge_yoda',
  'apiKey'   => 'd2c71e7b4b3b4a4094f9391026f39810'
));

// This is the service object that will handle everything Swift-related
$swift = $client->objectStoreService(null, 'LON');

/**
 * For the hawk-eyed, you'll notice the second argument above ("LON").
 * This refers to the geographic area, or "Region", that this service
 * operates in. Other possible options you have are:
 *
 * - ORD (Chicago)
 * - IAD (Virginia)
 * - DFW (Dallas)
 * - HKG (Hong Kong)
 * - SYD (Sydney)
 *
 * But since you're signed up as British sub-users, you won't be able to 
 * access these endpoints in this workshop 
 */
