<?php
namespace Sva\Print;

class Arr implements PrintInterface {
    public function print($var)
    {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }
}
