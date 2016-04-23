<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function __autoload($class) {
    if (substr($class,0,3) !== 'CI_') {
        if (file_exists($file = APPPATH . 'core/' . $class . EXT)) {
            include $file;
        }
    }
}