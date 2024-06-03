<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $persons)
    {
        $grams=$pizzas * (($persons * 20) + 200);
        return $grams;
    }

    public function calculateSauceRequirement($pizzas, $sauceCanVolume)
    {
       
        $cans_of_sauce=($pizzas * 125) / ($sauceCanVolume);
        
        return $cans_of_sauce;
        
    }

    public function calculateCheeseCubeCoverage($cubeSide, $thickness, $diameter)
    {
    //$nPizzas=($cubeSide**3)/(($thickness)*(22/7)*($diameter));
        $nPizzas = (($cubeSide**3) / (($thickness) * (22/7) * ($diameter)));
        $pPizzas = round($npizzas);
        return $pPizzas;
    }

    public function calculateLeftOverSlices($pizzas, $persons)
    {
        $left =(($pizzas*8)%$persons);
       
        return $left;
    }
}
