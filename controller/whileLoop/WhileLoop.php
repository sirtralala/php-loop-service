<?php

class WhileLoop extends Loop
{
    private $until;

    public function __construct($until)
    {
        $this->until = $until;
    }

    public function loopManipulation($characters)
    {
        $untilChars = [];
        $i = 0;
        $this->until = strtoupper($this->until);

        while ($characters[$i] != $this->until)
        {
            $untilChars[$i] = $characters[$i];
            $i++;
        }

        return $untilChars;
    }
}