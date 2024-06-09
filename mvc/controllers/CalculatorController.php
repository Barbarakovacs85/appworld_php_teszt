<?php

class CalculatorController {
    function calculatorView() {
        include(__DIR__."/../views/calculator.php");
    }

    function calculatorProcess() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST["numb1"]) || empty($_POST["numb2"])) {
                $_SESSION["error"] = 'Az adatok hiányosak';
            } else {
                $num1 = $_POST["numb1"];
                $num2 = $_POST["numb2"];
                $operator = $_POST["Operator"];
                $result = null;

                switch ($operator) {
                    case 'Összeadás':
                        $result = $num1 + $num2;
                        break;
                    case 'Kivonás':
                        $result = $num1 - $num2;
                        break;
                    case 'Szorzás':
                        $result = $num1 * $num2;
                        break;
                    case 'Osztás':
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            $_SESSION["error"] = 'Nullával való osztás nem lehetséges';
                        }
                        break;
                    default:
                        $_SESSION["error"] = 'Érvénytelen művelet';
                        break;
                }

                if ($result !== null) {
                    $_SESSION["success"] = 'Eredmény: ' . $result;
                }
            }
        } else {
            $_SESSION["error"] = 'Hibás kérés típusa';
        }

        header("Location: ?page=calculatorView");
        exit();
    }
}
