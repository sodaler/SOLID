<?php

/**
 * Реально используемый в коде класс
 */
class Bird
{
    public function fly()
    {
        $flySpeed = 10;
        return $flySpeed;
    }
}

/**
 * Дочерний класс от Bird.
 * Не изменяет поведение, но дополняет.
 * Не нарушает принцип LSP
 */
class Duck extends Bird
{
    public function fly()
    {
        $flySpeed = 8;
        return $flySpeed;
    }

    // расширяем класс данным методом
    public function swim()
    {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}

/**
 * Дочерний класс от Bird.
 * Изменяет поведение.
 * Нарушает принцип LSP
 */
class Penguin extends Bird
{
    public function fly()
    {
        //die('i can't fly :(('); // нетипичное поведение - die или exception
        return 'i can`t fly :(('; // нетипичное поведение - возвращаем строку вместо числа
    }

    public function swim()
    {
        $swimSpeed = 4;
        return $swimSpeed;
    }
}