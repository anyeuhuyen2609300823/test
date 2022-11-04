<?php
    //require_once ('database.php');
    require_once ("database.php");
    class m_hanghoa extends database
{
    public function read_hanghoa() {
        $sql = "select * from san_pham";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>