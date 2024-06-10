<?php

namespace controllers;

use models\Calculation;

class CalculatorController {

    use \traits\Utilities;

    function calculatorView() {
        $this->getViewFile("calculator");
        unset($_SESSION['eredmeny']);
    }

    function calculatorProcess() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST["numb1"]) || empty($_POST["numb2"])) {
                $_SESSION["error"] = 'Az adatok hiányosak';
            } else {
                $num1 = $_POST["numb1"];
                $num2 = $_POST["numb2"];
                $operator = $_POST["Operator"];

                try {
                    $calculation = new Calculation($num1, $num2, $operator);
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
