<?php
    class Product extends DB
    {
        const THREE_PRODUCT_HIGHEST_DISCOUNT = 3;
        const FOUR_PRODUCT_BEST_SELLER_YEAR = 4;
        const EIGHT_PRODUCT_NEW = 8;

        public function model_home1 ()
        {
            $getProvince  = $this->conn->prepare("SELECT * FROM province");
            $getProvince->execute();
            if ($getProvince)
            {
                $result = $getProvince->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
//list product new
        public function productNew ()
        {
            $getProLimit  = $this->conn->prepare("SELECT * FROM product ORDER BY id DESC LIMIT ".SELF::EIGHT_PRODUCT_NEW." ");
            $getProLimit->execute();
            if ($getProLimit) {
                $result = $getProLimit->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
//list best seller in current year
        public function getProductSale ()
        {
            $current_time = date("Y");
            $getProLimit  = $this->conn->prepare("SELECT * FROM product where YEAR(creat_date_up)= $current_time ORDER BY number_buy DESC LIMIT ".SELF::FOUR_PRODUCT_BEST_SELLER_YEAR."");
            $getProLimit->execute();
            if ($getProLimit) {
                $result = $getProLimit->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
//list percent sale
        public function getProductPercentSale ()
        {
            $getProLimit  = $this->conn->prepare("SELECT * FROM product ORDER BY sale_percent DESC LIMIT ".SELF::THREE_PRODUCT_HIGHEST_DISCOUNT."");
            $getProLimit->execute();
            if ($getProLimit) {
                $result = $getProLimit->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
//controller Productmanager
    public function getIdProduct ($id)
    {
        $getProduct = $this->conn->prepare("SELECT * FROM product where (id = $id)");
        $getProduct->execute();
        if ($getProduct) {
            $result = $getProduct->fetchALL(PDO::FETCH_ASSOC);
            return $result;
        }
    }
//
    public function getListCart() {
        if (!empty($_SESSION["cart"])) {
            $getProduct = $this->conn->prepare("SELECT * FROM `product` where ID in (".implode(",", array_keys($_SESSION["cart"])).")");
            $getProduct->execute();
            if ($getProduct) {
                $result = $getProduct->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
        }
    }
//
    public function categoryChair($category_gaming_chair) {
        $getProduct = $this->conn->prepare("SELECT * FROM product where (cate_id = ".$category_gaming_chair.")");
        $getProduct->execute();
        if ($getProduct) {
            $result = $getProduct->fetchALL(PDO::FETCH_ASSOC);
            return $result;
        }
    }
//
    public function getColorProduct ($color,$category_gaming_chair) {
        $getProduct = $this->conn->prepare("SELECT product.* FROM product inner join product_properties on product.id = product_properties.product  where product_properties.properties ='$color' and product.cate_id = ".$category_gaming_chair." ");
        $getProduct->execute();
        if ($getProduct) {
            $result = $getProduct->fetchALL(PDO::FETCH_ASSOC);
            return $result;
        }
    }
//
    public function getProductFilter ($priceFilter,$cate_id)
    {
//        String price text
        $replaceStringPrice = str_replace('$','',$priceFilter);
        $explodeStringPrice = explode('-',$replaceStringPrice);
        $priceFrom = $explodeStringPrice[0];
        $priceTo = $explodeStringPrice[1];
//        String price text
//        check if link  url have end parameter is number(color of product) will add condition filter with color.
        $url = $_SERVER["HTTP_REFERER"];
        $explodeUrl = explode('/',$url);
        if (is_numeric(end($explodeUrl)))
        {
            $color = end($explodeUrl);
            $getProduct = $this->conn->prepare("SELECT product.* FROM product inner join product_properties on product.id = product_properties.product  where product_properties.properties ='$color' and (cate_id = $cate_id) and price_saled between $priceFrom and $priceTo ");
            $getProduct->execute();
            if ($getProduct)
            {
                $result = $getProduct->fetchALL(PDO::FETCH_ASSOC);
                return $result;
            }
            exit();
        }
// Normal filter product not follow with color
        $getProduct = $this->conn->prepare("SELECT * FROM product where (cate_id = $cate_id) and price_saled between $priceFrom and $priceTo ");
        $getProduct->execute();
        if ($getProduct)
        {
            $result = $getProduct->fetchALL(PDO::FETCH_ASSOC);
            return $result;
        }
    }
//   get product search
    public function getProductSearch ($search, $start, $limit)
    {
        $getProduct = $this->conn->prepare("SELECT * FROM product where product.name like '%$search%' LIMIT $start, $limit");
        $getProduct->execute();
        if ($getProduct)
        {
            $result = $getProduct->fetchALL(PDO::FETCH_ASSOC);
            return $result;
        }
    }
//    total record search
    public function getTotalRecordSearch ($search)
    {
        $getProduct = $this->conn->prepare("SELECT COUNT(*) as totalrecord FROM product where product.name like '%$search%' ");
        $getProduct->execute();
        if ($getProduct)
        {
            $result = $getProduct->fetchALL(PDO::FETCH_ASSOC);
            return $result;
        }
    }
//    get all product admin (backend)
    public function getAllProductBackendAdmin ()
    {
        $getAllPro = $this->conn->prepare("SELECT * FROM product where trash = 1");
        $getAllPro->execute();
        if ($getAllPro)
        {
            $result = $getAllPro->fetchALL(PDO::FETCH_ASSOC);
            return $result;
        }
    }
//
    public function insertNewProduct ($dataInsert)
    {
        $date = date("Y-m-d");
        $insertNewProduct = $this->conn->prepare("INSERT INTO `product`(`id`, `name`, `avatar`, `producer_id`, `cate_id`, `detail`, `sortDesc`, `number`, `number_buy`, `sale_percent`, `price`, `price_saled`, `creat_date`, `creat_date_up`, `trash`, `status`) VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $data = array($dataInsert['name'], $dataInsert['filename'], $dataInsert['producer'], $dataInsert['cateid'], $dataInsert['detail'], $dataInsert['sortDesc'], $dataInsert['number'], 0, $dataInsert['sale_percent'], $dataInsert['price'], $dataInsert['price_saled'], $date, $date,1,1);
        $insertNewProduct->execute($data);
        if (!empty($insertNewProduct)) {
            $lastID = $this->conn->lastInsertId();
            return $lastID;
        } else {
            return false;
        }
    }
//
    public function setProductStatus ($id, $dataSet)
    {
        $getAllPro = $this->conn->prepare("UPDATE product SET status = $dataSet where (id = $id)");
        $getAllPro->execute();
        if ($getAllPro)
        {
            return true;
        }
    }
//
    public function deleteProductTrash ($id)
    {
        $getAllPro = $this->conn->prepare("UPDATE product SET trash = 0 where (id = $id)");
        $getAllPro->execute();
        if ($getAllPro)
        {
            return true;
        }
    }
//
    public function getProductTrash ()
    {
        $getAllPro = $this->conn->prepare("SELECT * FROM product WHERE trash = 0");
        $getAllPro->execute();
        if ($getAllPro)
        {
            $result = $getAllPro->fetchALL(PDO::FETCH_ASSOC);
            return $result;
        }
    }
//
    public function countProductTrash ()
    {
        $getAllPro = $this->conn->prepare("SELECT count(id) as numberTrash FROM product WHERE trash = 0");
        $getAllPro->execute();
        if ($getAllPro)
        {
            $result = $getAllPro->fetchALL(PDO::FETCH_COLUMN);
            return $result[0];
        }
    }
//
    public function restoreProduct ($id)
    {
        $getAllPro = $this->conn->prepare("UPDATE product SET trash = 1 where (id = $id)");
        $getAllPro->execute();
        if ($getAllPro)
        {
            return true;
        }
    }
//
    public function deleteProduct ($id)
    {
        $deleteProduct = $this->conn->prepare("DELETE FROM product where id = $id");
        $deleteProduct->execute();
        if ($deleteProduct)
        {
            return true;
        }
    }
//
    public function addNumberProduct ($id, $number)
    {
        $addNumberProduct = $this->conn->prepare("UPDATE product SET number = number + $number where (id = $id)");
        $addNumberProduct->execute();
        if ($addNumberProduct)
        {
            return true;
        }
    }
//
    public function updateProduct ($id,$dataUpdate)
    {
        $date = date("Y-m-d");
        $updateProduct = $this->conn->prepare("UPDATE product  SET `name`= ?,`producer_id`= ?,`cate_id`= ?,`detail`= ?,`sortDesc`= ?,`sale_percent`= ?,`price`= ?,`price_saled`= ?,`creat_date_up`= ?,`status`= ?  where id = $id");
        $data = array($dataUpdate['name'], $dataUpdate['producer'], $dataUpdate['cateid'], $dataUpdate['detail'], $dataUpdate['sortDesc'], $dataUpdate['sale_percent'], $dataUpdate['price'], $dataUpdate['price_saled'], $date, $dataUpdate['status']);
        $updateProduct->execute($data);
        if ($updateProduct)
        {
            return true;
        }
    }
}

