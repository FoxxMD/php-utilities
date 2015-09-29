<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 9/29/15
 * Time: 11:52 AM
 */

namespace FoxxMD\Utilities;


class ArrayUtil
{
    public static function get(&$var, $default = null)
    {
        return isset($var) ? $var : $default;
    }
}