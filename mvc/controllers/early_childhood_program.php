<?php
    class early_childhood_program extends  Controller {
        function Default() {
            $this->setLanguage();

            // Require ngôn ngữ
            require_once("./mvc/views/languages/lang.".$_SESSION["lang"].".php");

            $this->view("layoutWithoutBanner", [
                "page" => "programs_at_phca/early_childhood_program.php",
                "langData" => $lang
                ]);
        }
    }
?>