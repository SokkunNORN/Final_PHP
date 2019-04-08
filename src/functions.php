
<?php

class Calculator {

    public $firstNumber;
    public $secondNumber;

    function __construct($fNumber, $sNumber) {
        $this->firstNumber = $fNumber;
        $this->secondNumber = $sNumber;
    }

    public function plus() {
        return $this->firstNumber + $this->secondNumber;
    }

    public function minus() {
        return $this->firstNumber - $this->secondNumber;
    }
    public function multi() {
        return $this->firstNumber * $this->secondNumber;
    }
    public function divide() {
        return $this->firstNumber / $this->secondNumber;
    }

}






