<?php

namespace Ruchengtang\PHPDesignPatterns\Behavioral\TemplateMethod;

abstract class CaffeineBeverage
{
    final public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();

        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
    }

    abstract protected function brew();

    abstract protected function addCondiments();

    private function boilWater()
    {
        echo 'Boiling water<br>';
    }

    private function pourInCup()
    {
        echo 'Pouring into cup<br>';
    }

    protected function customerWantsCondiments()
    {
        return true;
    }
}
