<?php

namespace models;

class Newcalculator extends Calculation {
    public function __construct($num1, $num2, $operator) {
        parent::__construct($num1, $num2, $operator);
    }
}
