<?php
    class dance_programmes extends  Controller {
        function Default() {
            $this->setLanguage();

            // Require ngôn ngữ
            require_once("./mvc/views/languages/lang.".$_SESSION["lang"].".php");

            $this->view("layoutWithoutBanner", [
                "page" => "programs_at_phca/dance_programmes.php",
                "langData" => $lang
                ]);
        }
    }
?>