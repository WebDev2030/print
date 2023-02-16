<?php

namespace Sva\Print;

class Dump implements PrintInterface
{
    public function print($var)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }
}
