<?php
    class vocal_class extends  Controller {
        function Default() {
            $this->setLanguage();

            // Require ngôn ngữ
            require_once("./mvc/views/languages/lang.".$_SESSION["lang"].".php");

            $this->view("layoutWithoutBanner", [
                "page" => "programs_at_phca/vocal_class.php",
                "langData" => $lang
                ]);
        }
    }
?>