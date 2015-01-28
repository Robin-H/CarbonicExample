<?php

require('carbonic/Config.php');
$config = new Config(__DIR__);

$request = new Request($config);
$request->process();

?>