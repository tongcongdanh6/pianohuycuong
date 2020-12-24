<?php
// File này như kiểu template class để các Controller con kế thừa từ class này
// Trong này thực hiện require Models và Views
class Controller {
    public function model($model) {
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data = []) {
        require_once "./mvc/views/".$view.".php";

    }

    public function setLanguage() {
        if(!isset($_SESSION["lang"]))
        {
            $_SESSION["lang"]="vi";
        }
        else {
            if(isset($_GET["lang"])) {
                // Allow vi & en
                switch ($_GET["lang"]) {
                    case 'vi':
                    case 'en':
                        $_SESSION["lang"] = $_GET["lang"];
                        break;
                    
                    default:
                    $_SESSION["lang"] = "vi";
                        break;
                }
            }
        }
    }
}
?>