<?php

class ForEachLoop extends Loop
{
    public function loopManipulation($characters)
    {
        $invertedChars = [];

        // reverse character array
        foreach ($characters as $char)
        {
            array_unshift($invertedChars, $char);
        }

        return $invertedChars;
    }
}