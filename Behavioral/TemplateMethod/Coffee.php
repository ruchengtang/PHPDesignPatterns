<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\TemplateMethod;

class Coffee extends CaffeineBeverage
{
    protected function brew()
    {
        echo 'Dripping Coffee through filter<br>';
    }

    protected function addCondiments()
    {
        echo 'Adding Sugar and Milk<br>';
    }

    protected function customerWantsCondiments()
    {
        return rand(0, 1) ? true : false;
    }
}
