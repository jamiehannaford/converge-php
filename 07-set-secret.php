<?php

include '00-auth.php';

// Set account metadata secret
$key = 'i_like_burritos';
$swift->getAccount()->setTempUrlSecret($key);
