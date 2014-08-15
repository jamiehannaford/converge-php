<?php

// Add this after the `include' statement
use Guzzle\Plugin\Log\LogPlugin;
$client->addSubscriber(LogPlugin::getDebugPlugin());
