<?php
    //require_once ('database.php');
    require_once ("database.php");
    class m_loai extends database
{
    public function read_loai() {
        $sql = "select * from loai_san_pham";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>