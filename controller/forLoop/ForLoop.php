<?php

class ForLoop extends Loop
{
    public function loopManipulation($characters)
    {
        $evenChars = [];
        $j = 0;

        // add each even letter (B, D, F...)
        for ($i = 1; $i < count($characters); $i = $i + 2)
        {
            $evenChars[$j] = $characters[$i];
            $j++;
        }

        return $evenChars;
    }
}