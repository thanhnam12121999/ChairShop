<?php
    class Blog extends DB
    {
        public function getAllBlog ()
        {
            $getAllBlog  = $this->conn->prepare("SELECT * FROM blog");
            $getAllBlog->execute();
            if ($getAllBlog) {
                $result = $getAllBlog->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
//
        public function getBlogDetail ($id)
        {
            $getAllBlog  = $this->conn->prepare("SELECT * FROM blog where (id = $id)");
            $getAllBlog->execute();
            if ($getAllBlog) {
                $result = $getAllBlog->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
    }