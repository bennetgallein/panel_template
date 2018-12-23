<?php

use Controllers\Panel;
use Tracy\Debugger;

require("vendor/autoload.php");

session_start();


Debugger::enable();
try {
    $p = new Panel();
} catch (\Safe\Exceptions\FilesystemException $e) {
    print($e->getTrace());
}