<?php
    //require_once ('database.php');
    require_once ("database.php");
    class m_login extends database
{
    public function read_m_login($email, $password) {
        $sql = "select * from nguoi_dung where email = ? and mat_khau = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($email, $password));
    }
}
?>