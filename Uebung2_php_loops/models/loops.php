<?php


class loops {

    public function forLoop($characters) {
        $evenChars = [];
        $j = 0;

        // add each even letter (B, D, F...)
        for ($i = 1; $i < count($characters); $i = $i + 2) {
            $evenChars[$j] = $characters[$i];
            $j++;
        }

        echo "even test: " . implode( ", ", $evenChars );
        return $evenChars;
    }


    public function forEachLoop($characters) {
        $invertedChars = [];

        // reverse character array
        foreach ($characters as $char) {
            array_unshift($invertedChars, $char);
        }
        echo "reverse test: " . implode( ", ", $invertedChars );
        return $invertedChars;
    }

    public function whileLoop($characters, $until) {

        $untilChars = [];
        $i = 0;

        while ($characters[$i] != $until) {
            $untilChars[$i] = $characters[$i];
            $i++;
        }

        echo "until test: " . implode( ", ", $untilChars );
        return $untilChars;
    }

}

