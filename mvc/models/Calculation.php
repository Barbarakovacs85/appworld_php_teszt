<?php
//calculator ozstályt helyezi a névtérbe
namespace models;
//definiáltam az osztályt, amley a számításokat tartalmazza metódusokat , változókat
class Calculation {
    private $num1;
    private $num2;
    private $operator;
    private $total;
//itt kezdem a Calculation osztály konstruktorának a definicióját. 
    public function __construct($num1, $num2, $operator) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;
    }
//a Calculate metódus definiciója itt végzi a számításokat a megadott operator alapján
    public function calculate() {
        switch ($this->operator) { //a switch kezdi el a megvizsgálni melyik megadott műveletett kell elvégeznie
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
                    $_SESSION["error"] = 'Nullával való osztás nem lehetséges';
                    return;
                }
                break;
            default:
                $_SESSION["error"] = 'Érvénytelen művelet';
                return;
        }
        return $this->total; //visszaadja az aktuális eredmény a metódusba
    }
    
    public function getTotal() { //lehetővé teszi az eredmény lekérdezését kívülről
        return $this->total; //visszaadja az eredményt a getTotal metódusba
    }
}
?>