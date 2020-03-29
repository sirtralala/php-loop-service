<?php

// stupic class object without methods
class Result
{
    public $loopName;
    public $result;
}

class Controller
{
    private $abcArray;
    private $displayResult;
    private $loop;

    public function __construct()
    {
        $this->displayResult = new DisplayResult();
        $this->createData();
    }

    private function createData()
    {
        $abcFilePath = DATAPATH . "input.json";
        $abcRaw = file_get_contents($abcFilePath);
        $abcObject = json_decode($abcRaw);
        $this->abcArray = $abcObject->abc; // sollte nun array mit dem abc sein
    }

    private function chooseLoop($loopType)
    {
        switch ($loopType) {
            case "EVEN":
                $this->loop = new ForLoop();
                $loopName = "for-Loop";
                break;

            case "REVERSE":
                $this->loop = new ForEachLoop();
                $loopName = "forEach-Loop";
                break;

            case "UNTIL":
                $until = $_GET['until'];
                $this->loop = new WhileLoop($until);
                $loopName = "while-Loop";
                break;

            default:
                echo "No valid loopType parameter found!";
                return -1;
        }

        $resultArray = $this->loop->loopManipulation($this->abcArray);

        $resultObject = new Result();
        $resultObject->loopName = $loopName;
        $resultObject->result = $resultArray;
        $this->displayResult->streamOutput($resultObject);
    }

    public function init()
    {
        if (isset($_GET['loopType']))
        {
            $loopType = $_GET['loopType'];
            $this->chooseLoop($loopType);
        }

        else
            echo "No query parameter loopType found!";
    }
}