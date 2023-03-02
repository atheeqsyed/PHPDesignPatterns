<?php

/**
 * product */

namespace DesignPatterns\Creational\SimpleFactory\Product;

class GreenColor extends Color
{
    public function paint()
    {
        echo "i am green\n";
    }
}
