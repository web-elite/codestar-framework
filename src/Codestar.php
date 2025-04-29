<?php
namespace Webelitee\CodestarFramework;

use Webelitee\CodestarFramework\Classes\CSF_Setup;

if (!defined('ABSPATH')) {
    die;
}

class Codestar {
    public static function init() {
        CSF_Setup::init();
    }
}
