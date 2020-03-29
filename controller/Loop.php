<?php

abstract class Loop
{
    public function loopManipulation($characters)
    {
        $this->$characters = $characters;
    }
}
