<?php

class Wife implements IFoodProvider
{
    public function getFood()
    {
        // ...
        $food = ['meat', 'salad', 'soup'];
        return $food;
    }
}