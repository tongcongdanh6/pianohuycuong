<?php
    class App {
        protected $controller = "Home";
        protected $action = "SayHi";
        protected $params = [];

        function __construct() {
            $arr = $this->UrlProcess();
            //print_r($arr);

            // Xu ly CONTROLLER
            // Neu ton tai file Controller thi moi require_once (dua tren URL ma check)
            if(file_exists("./mvc/controllers/".$arr[0].".php")) {
                $this->controller = $arr[0];

                // Xoa khoi mang
                unset($arr[0]);
            }

            // Neu khong ton tai file nao het thi $controller = "Home"
            require_once "./mvc/controllers/".$this->controller.".php";
            $this->controller = new $this->controller; // Khoi tao instance Controller


            // Xy ly ACTION
            // Neu ton tai Action trong URL thi process tiep
            if(isset($arr[1])) {
                // Check function hay Action nay co trong Controller hien tai hay khong thi moi gan cho $action
                if(method_exists($this->controller, $arr[1])) {
                    $this->action = $arr[1];
                }
            }
            // Xoa khoi mang
            unset($arr[1]);

            

            // Xu ly PARAMS
            // Sau khi xoa arr[0] va arr[1] tu unset thi mang chi con params
            $this->params = $arr ? array_values($arr) : [];
            print_r($this->params);

            // Ham nay tao ra bien controller, chay ham action, va tham so truyen vao la params
            call_user_func_array([$this->controller, $this->action], $this->params);

        }

        function UrlProcess() {
            if(isset($_GET["url"])){
                // Tra ve mang
                return explode("/", filter_var(trim($_GET["url"], "/")));
            }
        }
    }
?>