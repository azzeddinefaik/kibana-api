<?php

$disk = require __DIR__. "/common/config.php";
file_put_contents("common/output/common.json",json_encode($disk));