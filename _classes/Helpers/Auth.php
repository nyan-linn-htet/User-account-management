<?php

namespace Helpers;

class Auth
{
    static $loginUrl = "/index.php";

    static function check()
    {
        session_start();

        if( isset($_SESSION["nyan"]) ) {

            return $_SESSION["nyan"];
        } else {

            HTTP::redirect(static::$loginUrl, "plf=1");
        }
    }
}