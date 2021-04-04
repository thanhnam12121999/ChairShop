<?php
    class ProductGrid extends Controller
    {
        const GET_ALL_PRODUCT_CATEGORY = 'cate_id';
        const CATEGORY_GAMING_CHAIR = 3;
        const LINK_GAMING_CHAIR_FILTER = "productGrid/filter";//public/ link change

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
                "data" => $this->dataProduct->categoryChair(SELF::CATEGORY_GAMING_CHAIR),
                "dataProperties" => $this->dataProperties->getValuePrt(),
                "bestSeller" => $this->dataProduct->getProductSale(),
                "listNameCategory" => $this->dataCategory->getListCategory(),
                "linkPageFilter" => SELF::LINK_GAMING_CHAIR_FILTER
            ]);
        }
//
        public function productColor ($color)
        {
//            inform show message error (default empty)
            $this->emptyProduct = "";
            if (empty($this->dataProduct->getColorProduct($color, SELF::CATEGORY_GAMING_CHAIR)))
            {
                $this->emptyProduct = "No products matched the colors you requested. Please try another color !";
            }
            $this->link_view("master1",[
                "page" => "productGrid",
                "data" => $this->dataProduct->getColorProduct($color,SELF::CATEGORY_GAMING_CHAIR),
                "dataProperties" => $this->dataProperties->getValuePrt(),
                "emptyProduct" => $this->emptyProduct,
                "bestSeller" => $this->dataProduct->getProductSale(),
                "listNameCategory" => $this->dataCategory->getListCategory(),
                "linkPageFilter" => SELF::LINK_GAMING_CHAIR_FILTER
            ]);
        }
        //
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
                "data" => $this->dataProduct->getProductFilter($priceFilter,SELF::CATEGORY_GAMING_CHAIR),
                "bestSeller" => $this->dataProduct->getProductSale(),
                "listNameCategory" => $this->dataCategory->getListCategory(),
                "linkPageFilter" => SELF::LINK_GAMING_CHAIR_FILTER
            ]);
        }
    }