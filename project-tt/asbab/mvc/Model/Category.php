<?php
    class Category extends DB
    {
        public function getListCategory ()
        {
            $get_list_name  = $this->conn->prepare("SELECT category.name FROM category ");
            $get_list_name->execute();
            if ($get_list_name) {
                $result = $get_list_name->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
//
        public function getAllListCategory ()
        {
            $get_list  = $this->conn->prepare("SELECT * FROM category ");
            $get_list->execute();
            if ($get_list) {
                $result = $get_list->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
//  view product index.php
        public function getNameCategoryProduct ($cate_id)
        {
            $get_cate_id = $this->conn->prepare("SELECT category.name FROM category where (id = $cate_id)");
            $get_cate_id->execute();
            if ($get_cate_id)
            {
                $name = $get_cate_id->fetchALL(PDO::FETCH_ASSOC);
                $cate_id = $name[0];
                return $cate_id['name'];
            }
        }
//
}