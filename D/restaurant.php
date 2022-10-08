<?php

class Restaurant implements IFoodProvider
{

    public function getFood()
    {
        $food = 'some food';
        // ...
        return $food;
    }
}