<?php
    class ImageProduct extends DB
    {
        public function getListImage ($id)
        {
            $get_img = $this->conn->prepare("SELECT * FROM image_product where (id_product = $id)");
            $get_img->execute();
            if ($get_img) {
                $result = $get_img->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
    //Controller (productManeger)
    public function insertImageProduct ($idProduct, $fileName)
    {
        $date = date("Y-m-d");
        $insertImageProduct = $this->conn->prepare("INSERT INTO `image_product`(`id`, `id_product`, `name`, `date`) VALUES (NULL, ?, ?, ?)");
        $data = array($idProduct , $fileName, $date);
        $insertImageProduct->execute($data);
        if (!empty($insertImageProduct)) {
            return true;
        } else {
            return false;
        }
    }
    //controller productManeger
    public function deleteImageProduct ($id)
    {
        $deleteImgProduct = $this->conn->prepare("DELETE FROM image_product where id_product = $id");
        $deleteImgProduct->execute();
        if ($deleteImgProduct)
        {
            return true;
        }
    }
}