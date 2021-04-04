<?php
    class Slide extends DB
    {
        public function getSlideImg ()
        {
            $getSlideImg  = $this->conn->prepare("SELECT slide.avatar FROM slide");
            $getSlideImg->execute();
            if ($getSlideImg)
            {
                $result = $getSlideImg->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
    }