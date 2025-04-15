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
        echo "Началось создание snack-а {$this->name}\n";
        echo "Добавляется шоколад {$this->chocolate}\n";
        echo "Добавлены начинки: " . implode(', ', $this->toppings) . "\n";
    }

    abstract public function cut(): void;

    public function getName(): string
    {
        return $this->name;
    }

    public function getChocolate(): string
    {
        return $this->chocolate;
    }

    public function getToppings(): array
    {
        return $this->toppings;
    }
}