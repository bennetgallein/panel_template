<?php
/**
 * Created by PhpStorm.
 * User: bennet
 * Date: 02.11.18
 * Time: 09:53
 */

namespace Module\BaseModule;


use Angle\Engine\Template\Engine;

class Test {

    public static function main(Engine $engine) {
        $engine->render("_views/test.html", array("test" => "Hello World"));
    }

}