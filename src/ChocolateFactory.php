<?php

namespace Dasha\Parent;

abstract class ChocolateFactory
{
    abstract protected function createSnack(string $type): Snack;

    public function orderSnack(string $type): Snack
    {
        $snack = $this->createSnack($type);
        $snack->prepare();
        $snack->cut();
        
        return $snack;
    }
}