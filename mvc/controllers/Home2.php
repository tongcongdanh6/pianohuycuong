<?php 
    class Home2 extends Controller {
        function SayHi() {
            // Các action trong này quy định về việc lấy database từ bảng nào, view nào sẽ lấy ra để hiển thị

            // Model
            $teo = $this->model("SinhVienModel");

            $this->setLanguage();

            // Require ngôn ngữ
            require_once("./mvc/views/languages/lang.".$_SESSION["lang"].".php");

            $this->view("layout_2", [
                "langData" => $lang
                ]);
            // View
        }

        function Show() {
            $teo = $this->model("SinhVienModel");
            $sv = $teo->GetSV();
        
            $this->view("layout_2", [
                "Page" => "contact",
                "SV" => $teo->SinhVien(),
                "number" => $sv
                ]);

        }
    }
?>