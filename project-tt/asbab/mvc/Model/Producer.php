<?php
    class Producer extends DB
    {
        public function getAllDataProducer ()
        {
            $get_data_producer  = $this->conn->prepare("SELECT * FROM producer");
            $get_data_producer->execute();
            if ($get_data_producer) {
                $result = $get_data_producer->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
    }