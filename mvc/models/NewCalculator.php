<?php
namespace models;

class NewCalculator extends Calculation {
   
    public function __construct($num1, $num2, $operator) {
        parent::__construct($num1, $num2, $operator);
    }

    public function calculate() {
        switch ($this->operator) {
            case 'Négyzetre emelés':
                $this->total = $this->num1 * $this->num1;
                break;
            case 'Négyzetgyökvonás':
                if ($this->num1 >= 0) {
                    $this->total = sqrt($this->num1);
                } else {
                    $_SESSION["error"] = 'Negatív számnak nincs valós négyzetgyöke';
                    return;
                }
                break;
            default:
                
                return parent::calculate();
        }
        return $this->total;
    }
}
?>
