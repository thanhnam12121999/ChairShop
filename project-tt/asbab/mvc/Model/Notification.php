<?php
    class Notification extends DB
    {
        public function getNotification ()
        {
            $get_notice = $this->conn->prepare("SELECT * FROM notification ");
            $get_notice->execute();
            if ($get_notice) {
                $result = $get_notice->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
    }