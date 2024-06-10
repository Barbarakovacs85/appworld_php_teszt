
<?php

namespace calculation;

class Calculation {
    private $num1;
    private $num2;
    private $operator;
    private $total;

    public function __construct($num1, $num2, $operator) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;
    }

    public function calculate() {
        switch ($this->operator) {
            case 'Összeadás':
                $this->total = $this->num1 + $this->num2;
                break;
            case 'Kivonás':
                $this->total = $this->num1 - $this->num2;
                break;
            case 'Szorzás':
                $this->total = $this->num1 * $this->num2;
                break;
            case 'Osztás':
                if ($this->num2 != 0) {
                    $this->total = $this->num1 / $this->num2;
                } else {
                    throw new \Exception('Nullával való osztás nem lehetséges');
                }
                break;
            default:
                throw new \Exception('Érvénytelen művelet');
        }
        return $this->total;
    }
    
    public function getTotal() {
        return $this->total;
    }
}
