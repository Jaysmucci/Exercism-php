<?php

class PizzaPi
{
    private const DOUGH_FOR_PIZZA = 200;
    private const DOUGH_FOR_PERSON = 20;
    private const SAUCE_PER_PIZZA = 125;
    private const PIZZA_IN_SLICES = 8;
    
    public function calculateDoughRequirement(int $pizza, int $person): int
    {

        return $pizza * (($person * self::DOUGH_FOR_PERSON) + self::DOUGH_FOR_PIZZA);
    }

    public function calculateSauceRequirement(int $pizza, int $sauce): int
    {
        return ($pizza / ($sauce / self::SAUCE_PER_PIZZA));
    }

    public function calculateCheeseCubeCoverage(int $dimension, float $thickness, int $diameter): mixed
    {

        return  floor((($dimension ** 3) / ($thickness * pi() * $diameter)));
        
    }

    public function calculateLeftOverSlices(int $pizza, int $friend): int
    {
        return ($pizza * self::PIZZA_IN_SLICES) % $friend;
    }
}
