<?php

class PizzaPi
{
    public function calculateDoughRequirement($No_of_pizzas,$No_of_persons)
    {
       $gram_of_dough = $No_of_pizzas * (($No_of_persons * 20) + 200);
        return $gram_of_dough;
    }

    public function calculateSauceRequirement($No_of_pizzas, $sauce_can_volume)
    {
        $cans_of_sauce = ($No_of_pizzas * 125)/$sauce_can_volume;
        return $cans_of_sauce;
    }

    public function calculateCheeseCubeCoverage($chesse_dimension, $thickness, $diameter)
    {
       $pizzas = ($chesse_dimension ** 3)/( $thickness * 3.14 * $diameter); 
        return (int) $pizzas;
    }

    public function calculateLeftOverSlices($No_of_pizzas, $No_of_friends)
    {
        $leftover_slice = ($No_of_pizzas * 8) % $No_of_friends;
        return $leftover_slice;
    }
}
