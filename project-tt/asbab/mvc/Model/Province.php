<?php
    class Province extends DB
    {
        public function getListProvince () {
            $get_list_province = $this->conn->prepare("SELECT * FROM province");
            $get_list_province->execute();
            if ($get_list_province) {
                $result = $get_list_province->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
//
    public function getListDistrict ($provinceId) {
        $get_list_province = $this->conn->prepare("SELECT * FROM district where (provinceid = $provinceId)");
        $get_list_province->execute();
        if ($get_list_province) {
            $result = $get_list_province->fetchALL(PDO::FETCH_ASSOC);
            return $result;
        }
    }
    }