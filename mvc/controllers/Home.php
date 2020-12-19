<?php 
    class Home extends Controller {
        function SayHi() {
            // Các action trong này quy định về việc lấy database từ bảng nào, view nào sẽ lấy ra để hiển thị

            // Model
            $teo = $this->model("SinhVienModel");

            $this->view("layout_1", [
                "Page" => "contact",
                "pageTitle" => "PHC Music & Performing Arts Academy"
                ]);
            // View
        }

        function Show() {
            $teo = $this->model("SinhVienModel");
            $sv = $teo->GetSV();
        
            $this->view("layout_1", [
                "Page" => "contact",
                "SV" => $teo->SinhVien(),
                "number" => $sv
                ]);

        }
    }
?>