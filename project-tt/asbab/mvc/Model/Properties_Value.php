<?php
    class Properties_Value extends DB
    {
        public function getValuePrt()
        {
            $get_value = $this->conn->prepare("SELECT * FROM `Properties_Value`");
            $get_value->execute();
            if ($get_value) {
                $result = $get_value->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
    }