<?php
    require "config/Config.php";
    require "app/core/Core.php";
    require "vendor/autoload.php";

    $core = new Core();
    $core->run();