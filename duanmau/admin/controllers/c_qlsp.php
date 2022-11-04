<?php

class c_qlsp {
    public function __construct()
    {
    }
    public function c_qlsp() {
        include ("models/m_qlsp.php");
        $m_qlsp = new m_qlsp();
        $m_qlsp = $m_qlsp->read_qlsp();

        $view = "views/qlsp/v_qlsp.php";
        include ("templates/layout.php");
    }
}