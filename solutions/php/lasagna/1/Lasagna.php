<?php

class Lasagna
{
    public function expectedCookTime()
    {
        // Implement the expectedCookTime method
        $expectedCookTime = 40;
        return $expectedCookTime;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        // Implement the remainingCookTime method
        $remainingCookTime = ($this->expectedCookTime() - $elapsed_minutes);
        return $remainingCookTime;
    }

    public function totalPreparationTime($layers_to_prep)
    {
        // Implement the totalPreparationTime method
        $layersPreparationTime = $layers_to_prep * 2;
        return $layersPreparationTime;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        // Implement the totalElapsedTime method
      $totalElapsedTime = ($this->totalPreparationTime($layers_to_prep) + $elapsed_minutes);
        return $totalElapsedTime;
        
    }

    public function alarm()
    {
        // Implement the alarm method
        return "Ding!";
    }
}
