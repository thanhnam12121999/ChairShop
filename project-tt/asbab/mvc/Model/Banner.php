<?php
    class Banner extends DB {
        public function GoodProduct()
        {
            $this->a = $this->conn->prepare("SELECT * FROM banner where (name ='goodproduct')");
            $this->a->execute();
            if ($this->a){
                $this->b = $this->a->fetchAll(PDO::FETCH_ASSOC);
                return $this->b ;
            }
        }
    }