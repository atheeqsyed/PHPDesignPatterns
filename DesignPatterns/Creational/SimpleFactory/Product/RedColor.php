<?php

/**
 * product */

namespace DesignPatterns\Creational\SimpleFactory\Product;

class RedColor extends Color
{
    public function paint()
    {
        echo "i am red\n";
    }
}