<?php
    require_once  '../../mvc/core/UpFile/upSingleFile.php';
    require_once  '../../mvc/core/UpFile/upMutilFile.php';

    class ProductManager extends Controller
    {
        const STATUS_PRODUCT_SHOW = 1;
        const STATUS_PRODUCT_HIDE = 0;

        public function __construct()
        {
            session_start();
            if (empty($_SESSION['nameBackend']))
            {
                header("location:http://localhost:8080/project-tt/asbab/public/backend/login");
                exit();
            }
            $this->dataProduct  = $this->link_model2("Product");
            $this->dataCategory = $this->link_model2("Category");
            $this->dataProducer = $this->link_model2("Producer");
            $this->dataImgProduct = $this->link_model2("ImageProduct");
        }

    //
        public function index ()
        {

            $this->link_view2("master3", [
                "page" => "index",
                "folder" => "product",
                "data" => $this->dataProduct->getAllProductBackendAdmin()
            ]);
        }
    //
        public function InsertProduct()
        {
            $this->link_view2("master3", [
                "page" => "insertProduct",
                "folder" => "product", //folder contain page view
                "dataCategory" => $this->dataCategory->getAllListCategory(),
                "dataProducer" => $this->dataProducer->getAllDataProducer()
            ]);
        }
    //
        public function InsertProductUp()
        {
            if(!isset($_POST['submit']))
            {
                header("location:http://localhost:8080/project-tt/asbab/public/");
                exit();
            }
            $upSingleFile = new upSingleFile();
            if (!empty($_FILES['image']['name']))
            {
                $link = '../../assets/images/product/';
                if (!$upSingleFile->upFile($link))
                {
                    $_SESSION['error'] = "This file format is not supported";
                    header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager/insertproduct");
                    exit();
                } else {
                    $filename = $upSingleFile->filename;
                }
            }
            $upMutilFile = new upMutilFile();
            if (!empty($_FILES['images']['name']))
            {
                if ($upMutilFile->upMutilImg() === false)
                {
                    $_SESSION['error'] = "This file format is not supported";
                    header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager/insertproduct");
                    exit();
                }
            }
            $dataInsertProduct = [
                'name' => $_POST['name'],
                'producer' => $_POST['producer'],
                'cateid' => $_POST['catid'],
                'sortDesc' => $_POST['sortDesc'],
                'detail' => $_POST['detail'],
                'price' => $_POST['price_root'],
                'sale_percent' => $_POST['sale_of'],
                'price_saled' => $_POST['price_buy'],
                'number' => $_POST['number'],
                'filename' => $filename,
            ];
            $lastID = $this->dataProduct->insertNewProduct($dataInsertProduct);
            foreach ($upMutilFile->nameImage as $key) {
                $this->dataImgProduct->insertImageProduct($lastID, $key);
            }
            header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager");
            exit();
        }
    //
        public function asetProductStatus ($id = "", $statusProduct)
        {
            if (empty($id)) {
                header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager");
                exit();
            }
            if ($statusProduct == SELF::STATUS_PRODUCT_SHOW)
            {
                $offActiveProduct = SELF::STATUS_PRODUCT_HIDE;
                $this->dataProduct->setProductStatus($id, $offActiveProduct); //change status product is off
            } else {
                $onActiveProduct = SELF::STATUS_PRODUCT_SHOW;
                $this->dataProduct->setProductStatus($id, $onActiveProduct); //change status product is on
            }
            header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager");
            exit();
        }
    //
        public function deleteProductTrash ($id = "")
        {
            if (empty($id)) {
                header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager");
                exit();
            }
            $this->dataProduct->deleteProductTrash($id); //delete product to trash
            header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager");
            exit();
        }
    //
        public function trash ()
        {
            $this->link_view2("master3", [
                "page" => "trash",
                "folder" => "product", //folder contain page view
                "dataTrash" => $this->dataProduct->getProductTrash() //delete product to trash
            ]);

        }
    //
        public function restoreProduct ($id = "")
        {
            if (empty($id)) {
                header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager/");
                exit();
            }
            $this->dataProduct->restoreProduct($id); //restore product out of trash
            header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager/trash");
            exit();
        }
    //
        public function deleteProduct ($id = "")
        {
            if (empty($id)) {
                header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager");
                exit();
            }
            $this->dataImgProduct->deleteImageProduct($id);
            $this->dataProduct->deleteProduct($id); //restore product out of trash
            header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager/trash");
            exit();
        }
    //
        public function import ($id = "")
        {
            if (empty($id)) {
                header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager");
                exit();
            }
            $this->link_view2("master3", [
                "page" => "import",
                "folder" => "product", //folder contain page view
                "dataProduct" => $this->dataProduct->getIdProduct($id), //delete product to trash
                "nameCategoryByID" => $this->dataCategory->getNameCategoryProduct($id)
            ]);
        }
    //
        public function importUp ($id = "")
        {
            if (!isset($_POST['submit']) || !isset($_POST['number_add']) || empty($id)) {
                header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager/import/$id");
                exit();
            }
            $numberAdd = $_POST['number_add'];
            $this->dataProduct->addNumberProduct($id, $numberAdd);
            header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager");
            exit();
        }
    //
        public function update($id = "")
        {
            if (empty($id)) {
                header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager");
                exit();
            }
            $this->link_view2("master3", [
                "page" => "update",
                "folder" => "product", //folder contain page view
                "dataProduct" => $this->dataProduct->getIdProduct($id),
                "dataProducer" => $this->dataProducer->getAllDataProducer(),
                "listNameCategory" => $this->dataCategory->getAllListCategory()
            ]);
        }
//
        public function updateProductUp ($id)
        {
            if (!isset($_POST['submit']) || empty($id)) {
                header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager/");
                exit();
            }
            $dataUpdateProduct = [
                'name' => $_POST['name'],
                'producer' => $_POST['producer'],
                'cateid' => $_POST['catid'],
                'sortDesc' => $_POST['sortDesc'],
                'detail' => $_POST['detail'],
                'price' => $_POST['price_root'],
                'sale_percent' => $_POST['sale_of'],
                'price_saled' => $_POST['price_buy'],
                'status' => $_POST['status']
            ];
            $this->dataProduct->updateProduct($id, $dataUpdateProduct);
            header("location:http://localhost:8080/project-tt/asbab/public/backend/ProductManager");
            exit();
        }
}