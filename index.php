<?php

    use App\Core\Core;

    require_once "vendor/autoload.php";

    $core = new Core;
    echo $core->start($_GET);