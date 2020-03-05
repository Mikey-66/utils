<?php

namespace SuperMe\Utils;

class ArrayHelper
{
    public static function arrayFirst($array)
    {
        foreach ($array as $item)
        {
            $r = $item;
            break;
        }
        return $r;
    }
}