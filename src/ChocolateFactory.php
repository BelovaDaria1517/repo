<?php

namespace Dasha\Parent;

use Dasha\Child\ChocolateBar;
use Dasha\Child\ChocolateCake;
use Dasha\Child\ChocolateCandy;
use Dasha\Parent\Snack;

class ChocolateFactory
{
    public array $vidSnack=["bar","Candy","Cake"];

    public function orderSnek(string $name): void
    {
        $snek = $this->createSnack($name);

        $snek->prepare();
    }

    public function createSnack(string $name): Snack|string
    {
        if ($name === "Bar") {
            $newChocolateBar = new ChocolateBar();
            return $newChocolateBar;
        }

        if ($name === "Cake") {
            $newChocolateCake = new ChocolateCake();
            return $newChocolateCake;
        }

        if ($name === "Candy") {
            $newChocolateCandy = new ChocolateCandy();
            return $newChocolateCandy;
        }

        $i=0;
        foreach($this->vidSnack as $vidSnack){
            if ($name===$vidSnack){
                $i=$i+1;
            }
        }
        if ($i===0){
            echo "Такого снека нет в списке";   
        }
        exit;
    }




    

      







    /*
    public function createSnack(string $type): Snack
    {

    }

    public function orderSnack(string $type): Snack
    {
        $snack = $this->createSnack($type);
        $snack->prepare();
        $snack->cut();
        
        return $snack;
    }*/
}