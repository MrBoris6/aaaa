<?php
class Utils {};
$a = new Utils;
$a->_file = "/var/log/nginx/access.log";
$a->_id = "345849012";
$a->_host = "vimeo";
$a->title = "asd";
$a->description = "asd";
$a->thumbnail_small = "asd";
echo serialize($a);
?>
