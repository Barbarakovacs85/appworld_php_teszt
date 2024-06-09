<?php

namespace controllers;

class CalculatorController {

    use \traits\Utilities;

    function calculatorView() {
        $this->getViewFile("calculator");
    }

    function calculatorProcess() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST["numb1"]) || empty($_POST["numb2"])) {
                $_SESSION["error"] = 'Az adatok hiányosak';
            } else {
                $num1 = $_POST["numb1"];
                $num2 = $_POST["numb2"];
                $operator = $_POST["Operator"];
                $total = null;

                switch ($operator) {
                    case 'Összeadás':

                        $total = $num1 + $num2;
                        break;
                    case 'Kivonás':
                        $total = $num1 - $num2;
                        break;
                    case 'Szorzás':
                        $total = $num1 * $num2;
                        break;
                    case 'Osztás':
                        if ($num2 != 0) {
                            $total = $num1 / $num2;
                        } else {
                            $_SESSION["error"] = 'Nullával való osztás nem lehetséges';
                        }
                        break;
                    default:
                        $_SESSION["error"] = 'Érvénytelen művelet';
                        break;
                }

                if ($total !== null) {
                    $_SESSION["success"] = 'Eredmeny: ' . $total;
                    $_SESSION["eredmeny"] = $total;
                }
            }
        } else {
            $_SESSION["error"] = 'Hibás kérés típusa';
        }

        header("Location: ?page=calculatorView");
        exit();
    }

}
