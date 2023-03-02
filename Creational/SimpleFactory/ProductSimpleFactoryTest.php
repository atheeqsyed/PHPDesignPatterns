<?php

namespace DesignPatterns\Creational\SimpleFactory;

class ProductSimpleFactoryTest
{
    public function testUniqueness()
    {
        try {
            $color = ColorFactory::get('Red');
            $color->paint();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}