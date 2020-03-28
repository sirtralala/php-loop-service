<?php

// stupic class object, without methods
class Result {
    public $loopType;
    public $resultArray;
}

class selectLoop {

    private $abcArray;
    private $displayResult;
    private $loops;

    public function __construct() {
        $this->displayResult = new displayResult();
        $this->loops = new loops();
        $this->createData();
    }

    private function createData() {
        $abcFilePath = DATAPATH . "input.json";
        $abcRaw = file_get_contents($abcFilePath);
        $abcObject = json_decode($abcRaw);
        $this->abcArray = $abcObject->abc; // sollte nun array mit dem abc sein
    }

    private function chooseLoop($loopType, $until) {
        $resultArray = [];
        $loopName = "";

        switch ($loopType) {
            case "EVEN":
                $resultArray = $this->loops->forLoop($this->abcArray);
                $loopName = "for-Loop";
                break;

            case "REVERSE":
                $resultArray = $this->loops->forEachLoop($this->abcArray);
                $loopName = "forEach-Loop";
                break;

            case "UNTIL":
                $resultArray = $this->loops->whileLoop($this->abcArray, $until);
                $loopName = "while-Loop";
                break;

            default:
                echo "No loop type recognized.";
                break;
        }

        $resultObject = new Result();
        $resultObject->loopType = $loopName;
        $resultObject->resultArray = $resultArray;
        $this->displayResult->streamOutput($resultObject);
    }

    // http://localhost/Uebung2_php_loops/index.php?loopType=EVEN
    public function init() {
        if (isset($_GET['loopType']) && isset($_GET['until'])) {
            $until = $_GET['until'];
            $loopType = $_GET['loopType'];
            $this->chooseLoop($loopType, $until);
        }

        else if (isset($_GET['loopType']) && !isset($_GET['until'])) {
            $until = "dummy";
            $loopType = $_GET['loopType'];
            $this->chooseLoop($loopType, $until);
        }
    }
}