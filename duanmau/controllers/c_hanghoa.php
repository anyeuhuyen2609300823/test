<?php

class c_hanghoa {
    public function __construct()
    {
    }
    public function c_hanghoa() {
        include ("models/m_hanghoa.php");
        $m_hanghoa = new m_hanghoa();
        $m_hanghoa = $m_hanghoa->read_hanghoa();

        // gọi phương thức read_hanghoa vào đây ;
        $view = "views/hanghoa/v_hanghoa.php";
        include ("templates/front-end/layout.php");
    }
}