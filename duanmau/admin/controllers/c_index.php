<?php

class c_index {
    public function __construct()
    {
    }
    public function c_index() {
        include ("models/m_index.php");
        $m_index = new m_index();
        $m_index = $m_index->read_index();

        $view = "views/admin/v_index.php";
        include ("templates/layout.php");
    }
}