<?php

session_start();

class Calculator {
    
    private $result = 0;

    public function __construct()
    {
        $this->result = isset($_SESSION['eredmeny']) ? $_SESSION['eredmeny'] : 0;
    }

    public function osszead($number = 0, $number2 = 0) {
        $this->result = $number + $number2;
        $_SESSION['eredmeny'] = $this->result;
    }

    public function kivon($number = 0, $number2 = 0) {
        $this->result = $number - $number2;
        $_SESSION['eredmeny'] = $this->result;
    }

    public function szoroz($number = 0, $number2 = 0) {
        $this->result = $number * $number2;
        $_SESSION['eredmeny'] = $this->result;
    }

    public function oszt($number = 0, $number2 = 0) {
        if ($number2 != 0) {
            $this->result = $number / $number2;
            $_SESSION['eredmeny'] = $this->result;
        } else {
            $_SESSION['error'] = 'Nullával való osztás nem lehetséges';
        }
    }

    public function getResult() {
        return $this->result;
    }
}