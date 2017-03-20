<?php

$cpu = require __DIR__. "/config/config.php";

file_put_contents("output/final.json",json_encode($cpu));