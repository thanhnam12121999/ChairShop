<?php
    class OfficeChair extends Controller
    {
        const GET_ALL_PRODUCT_CATEGORY = 'cate_id';
        const CATEGORY_OFFICE_CHAIR = 2;
        const LINK_OFFICE_CHAIR_FILTER = "officechair/filter";

        public function __construct()
        {
            session_start();
            if (empty($_SESSION['username']))
            {
                header("location:http://localhost:8080/project-tt/asbab/public/login");
                exit();
            }
            $this->dataProduct = $this->link_model("Product");
            $this->dataProperties = $this->link_model("Properties_Value");
            $this->dataCategory = $this->link_model("Category");
        }
//
        public function index ()
        {
    //
            $this->link_view("master1",[
                "page" => "productGrid",
                "data" => $this->dataProduct->categoryChair(SELF::CATEGORY_OFFICE_CHAIR),
                "dataProperties" => $this->dataProperties->getValuePrt(),
                "bestSeller" => $this->dataProduct->getProductSale(),
                "listNameCategory" => $this->dataCategory->getListCategory(),
                "linkPageFilter" => SELF::LINK_OFFICE_CHAIR_FILTER
            ]);
        }
//        start filter
        public function filter ()
        {
            if (!isset($_POST['filter']))
            {
                header("location:http://localhost:8080/project-tt/asbab/public/productgrid");
                exit();
            }
            $priceFilter = $_POST['filter'];
            $this->link_view("master1",[
                "page" => "productGrid",
                "dataProperties" => $this->dataProperties->getValuePrt(),
                "data" => $this->dataProduct->getProductFilter($priceFilter,SELF::CATEGORY_OFFICE_CHAIR),
                "bestSeller" => $this->dataProduct->getProductSale(),
                "listNameCategory" => $this->dataCategory->getListCategory(),
                "linkPageFilter" => SELF::LINK_GAMING_CHAIR_FILTER
            ]);
        }
    }