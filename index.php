<?php

$requestUri = $_SERVER['REQUEST_URI'];
header("Location: $requestUri"."frontend");