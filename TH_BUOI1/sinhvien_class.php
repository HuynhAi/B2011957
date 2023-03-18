<?php
    class sinhvien{
        public string $mssv;
        public string $hoten;
        public $ngaysinh;
        function __construct($ms,$ht,$ns){
            $this->mssv= $ms;
            $this->hoten= $ht;
            $this->ngaysinh = $ns;
        }
        function __destruct(){
            echo "<br>Thong tin : <br>";
            echo "MSSV: {$this->mssv}.<br>";
            echo "HoTen: {$this->hoten}.<br>";
            echo "NgaySinh: {$this->ngaysinh}.<br>";
        }
        function set_mssv($ms,$ht,$ns){
            $this->mssv= $mv;
            $this->hoten= $ht;
            $this->ngaysinh = $ns;
        }
        function get_mssv(){
            return $this->mssv;
        }
        function get_hoten(){
            return $this->hoten;
        }
        function get_ngaysinh(){
            return $this->ngaysinh;
        }
       function tuoi(){
           date_default_timezone_set('Asia/Ho_Chi_Minh');
           $t = date_diff(date_create(),date_create($this->ngaysinh));
           $tuoi = $t->format('%Y');
            return $tuoi;     
        }
    }
    $sv = new sinhvien('B2011957','Huynh Thi My Ai','2001-06-18');
    echo 'Sinh Vien: '.$sv->get_hoten().' co tuoi la: ' .$sv->tuoi();
?>