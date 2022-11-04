<?php

class c_loai {
    public function __construct()
    {
    }
    public function c_loai() {
        include ("models/m_loai.php");
        $m_loai = new m_loai();
        $m_loai = $m_loai->read_loai();

        // gọi phương thức read_loai vào đây ;
        $view = "views/loai/v_loai.php";
        include ("templates/front-end/layout.php");
    }
}