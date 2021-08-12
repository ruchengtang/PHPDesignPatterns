<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\TemplateMethod;

class Tea extends CaffeineBeverage
{
    protected function brew()
    {
        echo 'Steeping the tea<br>';
    }

    protected function addCondiments()
    {
        echo 'Adding Lemon<br>';
    }

    protected function customerWantsCondiments()
    {
        return rand(0, 1) ? true : false;
    }
}
