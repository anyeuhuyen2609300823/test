<?php
    //require_once ('database.php');
    require_once ("database.php");
    class m_index extends database
{
    public function read_index() {
        $sql = "select * from nguoi_dung";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>