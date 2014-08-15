<?php

include '00-auth.php';

// Set account metadata secret
$key = 'i_like_burritos';
//$swift->getAccount()->setTempUrlSecret($key);

// Generate HMAC
$path   = '/v1/MossoCloudFS_ad27aa2e-5f9f-4137-b69e-61efb439c9bd/test_3';
$expiry = time() + 3600;
$method = 'POST';
$redirect = 'http://google.com';
$maxFileSize = 104857600;
$maxFileCount = 10;

$body = sprintf("%s\n%d\n%s\n%s\n%s", $path, $redirect, $maxFileSize, $maxFileCount, $expiry);
$hmacSig = hash_hmac("sha1", $body, $key);

// Output required params
printf("Max size: %s\nMax count: %s\nRedirect URL: %s\nPath: %s\nExpires: %s\nHMAC sig: %s\n", $maxFileSize, $maxFileCount, $redirect, $path, $expiry, $hmacSig);
