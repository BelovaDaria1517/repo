<?php

namespace Dasha\Parent;

abstract class Snack
{
    protected string $name;
    protected string $chocolate;
    protected array $toppings;

    public function __construct(string $name, string $chocolate, array $toppings)
    {
        $this->name = $name;
        $this->chocolate = $chocolate;
        $this->toppings = $toppings;
    }

    public function prepare(): void
    {
        echo "{$this->name}\n";
        echo "{$this->chocolate}\n";
        echo ":";
        foreach ($this->toppings as $toppings) {
            echo "$toppings; ";
        };
    }

    public function cut():void
    {
        echo "Такой снек не нарезают" . PHP_EOL;
    }
}