<?php
/**
 * factory
 */
namespace DesignPatterns\Creational\SimpleFactory\Product;

class ColorFactory
{

    public static function get($color)
    {
        $className = $color . "Color";
        if (class_exists($className)) {
            return new $className;
        }

        throw new Exception("{$color} does not exists");
    }
}