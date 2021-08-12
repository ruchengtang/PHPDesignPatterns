<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\TemplateMethod;

class Client
{
    public function run()
    {
        $coffee = new Coffee();
        echo 'Making Coffee...<br>';
        $coffee->prepareRecipe();

        $tea = new Tea();
        echo 'Making Tea...<br>';
        $tea->prepareRecipe();
    }
}
