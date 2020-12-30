<?php 
    class Home3 extends Controller {
        function SayHi() {
            // Các action trong này quy định về việc lấy database từ bảng nào, view nào sẽ lấy ra để hiển thị

            // Model
            $teo = $this->model("SinhVienModel");

            $this->view("layout_3", [
                "pageTitle" => "PHC Music & Performing Arts Academy",
                "page" => "homepage/homepage.php"
                ]);
            // View
        }

        function Show() {
            $teo = $this->model("SinhVienModel");
            $sv = $teo->GetSV();
        
            $this->view("layout_3", [
                "Page" => "contact",
                "SV" => $teo->SinhVien(),
                "number" => $sv
                ]);

        }
    }
?>