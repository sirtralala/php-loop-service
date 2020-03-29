<?php

class DisplayResult
{
    public function __construct()
    {
        header('Content-Type: application/json');
    }

    public function streamOutput($resultObject)
    {
        // change json object to json string
        $jsonOutput = json_encode($resultObject);

        // send result to client
        echo $jsonOutput;
    }
}