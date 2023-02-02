<?php

namespace Vivek;

class UniqueId
{
    public static function generate($length=19)
    {
        $key = (int) (microtime(true) * 1000000000);
        $id = substr($key,0,$length);
        return (int)$id;
    }
}
