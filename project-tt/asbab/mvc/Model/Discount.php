<?php
    class Discount extends DB
    {
        public function getCheckCodeDiscount ($code,$time_now) {

            $get_check_code = $this->conn->prepare("SELECT * FROM discount where(code = '$code') and (expiration_date > $time_now) and ((limit_number - number_used) > 0)");
            $get_check_code->execute();
            if ($get_check_code) {
                $result = $get_check_code->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
    }