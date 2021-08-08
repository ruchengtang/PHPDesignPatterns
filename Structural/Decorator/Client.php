<?php

namespace Ruchengtang\PHPDesignPatterns\Structural\Decorator;

class Client
{
    public function run()
    {
        $eggCake = new EggCake();
        $eggCake = new Egg($eggCake);
        $eggCake = new Lettuce($eggCake);

        echo $eggCake->getDescription();
        echo ': ' . $eggCake->price() . 'yuan';
        echo '<br/>';

        $handCake = new HandCake();
        $handCake = new Egg($handCake);
        $handCake = new Sausage($handCake);

        echo $handCake->getDescription();
        echo ': ' . $handCake->price() . 'yuan';
        echo '<br/>';
    }
}
