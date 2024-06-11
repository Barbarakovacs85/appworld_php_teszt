<?php

namespace controllers;

use models\Calculation;
use models\NewCalculator;

class CalculatorController {

    use \traits\Utilities;

    function calculatorView() {
        $this->getViewFile("calculator");
        unset($_SESSION['eredmeny']);
    }

    function calculatorProcess() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $operator = $_POST["Operator"];
            $num1 = $_POST["numb1"];
            $num2 = isset($_POST["numb2"]) ? $_POST["numb2"] : null;

            if (empty($num1) || (empty($num2) && !in_array($operator, ['Négyzetre emelés', 'Négyzetgyökvonás']))) {
                $_SESSION["error"] = 'Az adatok hiányosak';
            } else {
                try {
                    if (in_array($operator, ['Négyzetre emelés', 'Négyzetgyökvonás'])) {
                        $calculation = new NewCalculator($num1, 0, $operator);
                    } else {
                        $calculation = new Calculation($num1, $num2, $operator);
                    }
                    $total = $calculation->calculate();

                    $_SESSION["success"] = 'Eredmény: ' . $total;
                    $_SESSION["eredmeny"] = $total;
                    
                } catch (\Exception $e) {
                    $_SESSION["error"] = $e->getMessage();
                }
            }
        } else {
            $_SESSION["error"] = 'Hibás kérés típusa';
        }

       
        header("Location: ?page=calculatorView");
        exit();
    }
}
?>
