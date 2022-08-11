<?php

$uri = $_SERVER['REQUEST_URI'];

$uriParts = explode('/',$uri);

array_shift($uriParts);

include("dev/views/index.html");