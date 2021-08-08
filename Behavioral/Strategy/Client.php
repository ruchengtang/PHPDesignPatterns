<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\Strategy;

class Client
{
    public function run()
    {
        echo '<pre>';

        $dateComparator = new DateComparator();
        $dateContext = new Context($dateComparator);
        $dateElements = $dateContext->executeStrategy([
            ['date' => '2021-03-06'],
            ['date' => '2021-09-23'],
            ['date' => '2021-08-16'],
            ['date' => '2020-12-25'],
            ['date' => '2021-07-20'],
        ]);
        var_dump($dateElements);

        echo '<br/>';

        $idComparator = new IdComparator();
        $idContext = new Context($idComparator);
        $idElements = $idContext->executeStrategy([
            ['id' => 34],
            ['id' => 26],
            ['id' => 97],
            ['id' => 88],
            ['id' => 36],
        ]);
        var_dump($idElements);

        echo '</pre>';
    }
}
