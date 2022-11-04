<?php
    //require_once ('database.php');
    require_once ("database.php");
    class m_signup extends database
{
    public function read_signup() {
        $sql = "select * from nguoi_dung";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>