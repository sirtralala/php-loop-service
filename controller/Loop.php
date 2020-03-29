<?php

abstract class Loop
{
    public function loopManipulation($characters)
    {
        // not needed here -> remove
        $this->$characters = $characters;
    }
}
