<?php
    require_once "../mvc/core/Pagination/Pagination.php";

    class Search extends Controller
    {
        const GET_ALL_PRODUCT_CATEGORY = 'cate_id';
        const LIMIT_PAGE = 3;

        public function __construct()
        {
            session_start();
            if (empty($_SESSION['username']))
            {
                header("location:http://localhost:8080/project-tt/asbab/public/login");
                exit();
            }
            $this->dataProduct = $this->link_model("Product");
            $this->dataCategory = $this->link_model("Category");
        }
        public function index ()
        {
            if (isset($_POST['submit']) && isset($_POST['search']))
            {
                $keySearch = $_POST['search'];
                header("location:http://localhost:8080/project-tt/asbab/public/search/key/".$keySearch."");
                exit();
            } else {
                header("location:http://localhost:8080/project-tt/asbab/public/home");
                exit();
            }
        }
//Start index search page
        public function key ($keySearch = "",$page = "")
        {
            if (empty($keySearch) || !isset($keySearch))
            {
                header("location:http://localhost:8080/project-tt/asbab/public/home");
                exit();
            }
//get total record
            $total_record = $this->dataProduct->getTotalRecordSearch($keySearch);
            foreach ($total_record as $value)
            {
                $total_records = $value['totalrecord'];
            }
//page pagination
            $pagination = new Pagination($page ,$total_records ,SELF::LIMIT_PAGE);
            $pagination->run();

//check return result null
            $resultRecord = $this->dataProduct->getProductSearch($keySearch, $pagination->start, $pagination->limit);
            if (empty($resultRecord)) {
                $_SESSION['error'] = "No product same with your key search . Please try with another key !";
                $this->link_view("master1",[
                    "page" => "search",
                    "data" =>"",
                    "bestSeller" => $this->dataProduct->getProductSale(),
                    "listNameCategory" => $this->dataCategory->getListCategory(),
                    "totalPage" => "",
                    "currentPage" => "",
                    "keySearch" => ""
                ]);
                exit();
            }
// call view search
            $this->link_view("master1",[
                "page" => "search",
                "data" => $this->dataProduct->getProductSearch($keySearch, $pagination->start, $pagination->limit),
                "bestSeller" => $this->dataProduct->getProductSale(),
                "listNameCategory" => $this->dataCategory->getListCategory(),
                "totalPage" => $pagination->total_page,
                "currentPage" => $pagination->current_page,
                "keySearch" => $keySearch
            ]);
        }
    }