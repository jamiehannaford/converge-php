<?php

include '00-auth.php';

$container = $swift->getContainer('test_3');

$objects = $container->objectList();

foreach ($objects as $object) {
  $url = $object->getUrl();
  
  if (!preg_match("#\.(?:jpg|gif|png)$#", $url)) {
    continue;
  }

  $tempUrl = $object->getTemporaryUrl(3600, 'GET');
  echo '<div>';
  echo 'Normal: <img src="' . $url . '" />';
  echo 'Private: <img src="' . $tempUrl . '" />';
  echo '</div>';
}
