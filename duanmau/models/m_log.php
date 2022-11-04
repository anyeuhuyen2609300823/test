<?php

include('database.php');

class m_log extends database
{
    // lấy ra thông tin của 1 người
    public function read_login($email, $password)
    {
        $sql = "select * from nguoi_dung where email = ? and mat_khau = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($email, $password));
    }
}