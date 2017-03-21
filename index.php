<?php

$disk = require __DIR__. "/hotel-api/config.php";
file_put_contents("hotel-api/output/disk.json",json_encode([$disk]));