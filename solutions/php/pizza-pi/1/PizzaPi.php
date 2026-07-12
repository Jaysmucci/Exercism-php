<?php

class PizzaPi
{
    public function calculateDoughRequirement(int $pizza, int $person): ?int
    {
        $numberOfPizza = $pizza;
        $numberOfPerson = $person;

        $dough = $numberOfPizza * (($numberOfPerson * 20) + 200);

        return $dough;
    }

    public function calculateSauceRequirement(int $pizza, int $sauce): ?int
    {
        $cansOfSource = ($pizza / ($sauce / 125));

        return $cansOfSource;
    }

    public function calculateCheeseCubeCoverage(int $dimension, float $thickness, int $diameter): mixed
    {

        $cheese = (($dimension ** 3) / ($thickness * pi() * $diameter));

        return floor($cheese);
        
    }

    public function calculateLeftOverSlices(int $pizza, int $friend): ?int
    {
        $totalSlices = $pizza * 8;
        return $totalSlices % $friend;
    }
}
