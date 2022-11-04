<?php
        require_once ("database.php");
        class m_qlsp extends database
    {
        public function read_qlsp() {
            $sql = "select * from san_pham";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
            
    }


?>
