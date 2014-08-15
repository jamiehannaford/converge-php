import hmac
from hashlib import sha1
from time import time

path = '/v1/MossoCloudFS_ad27aa2e-5f9f-4137-b69e-61efb439c9bd/test_3'
redirect = 'https://google.com'
max_file_size = 104857600
max_file_count = 10
expires = int(time() + 3600)
key = 'i_like_burritos'

hmac_body = '%s\n%s\n%s\n%s\n%s' % (path, redirect,
   max_file_size, max_file_count, expires)

signature = hmac.new(key, hmac_body, sha1).hexdigest()

print "Expires = %d\nSignature = %s" % (expires, signature)
