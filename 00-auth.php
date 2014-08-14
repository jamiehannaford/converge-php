<?php

require 'vendor/autoload.php';

use OpenCloud\Rackspace;

$client = new Rackspace(Rackspace::UK_IDENTITY_ENDPOINT, array(
  'username' => '',
  'password' => ''
));

$swift = $client->objectStoreService(null, 'LON');
