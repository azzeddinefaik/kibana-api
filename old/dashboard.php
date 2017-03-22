<?php

$db = require __DIR__. "/dashboard/disk-overview.php";
file_put_contents("dashboard/db.json",json_encode([$db]));