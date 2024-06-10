<?php 

namespace calculation;

class Calculation {
    private $num1;
    private $num2;
    private $operator;
    private $total;

    public function __construct($num1, $num2, $operator) {
        $this->num1 = $num1;
        $this->$num2 = $num2;
        $this->operator = $operator;
    }
}

?>