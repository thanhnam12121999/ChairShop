<?php
    require_once '../mvc/core/NganLuong/checkout.php';
    require_once '../mvc/core/NganLuong/config.php';
    require_once '../mvc/core/NganLuong/lib/nganluong.class.php';

    class Payment extends Controller
    {
        public function __construct()
        {
            $this->dataProduct = $this->link_model("Product");
            $this->dataProvince = $this->link_model("Province");
        }
//
        public function index () {
            session_start();
            if (empty($_SESSION['cart'])){
                header("location:http://localhost:8080/project-tt/asbab/public/home");
                exit();
            }
            $discount = 0;
            if (isset($_POST['submit'])) {
                if (isset($_POST['discount1'])) {
                    $discount = $_POST['discount1'] ;
                }
            }
            $this->link_view("master1",[
                "page" => "checkout",
                "getListCart" => $this->dataProduct->getListCart(),
                "province" => $this->dataProvince->getListProvince(),
                "discount" => $discount
            ]);
        }
    //
        public function deleteCartProd ($id) {
            session_start();
            if (isset($_SESSION["cart"])) {
                unset($_SESSION["cart"][$id]);
            }
            header("location:http://localhost:8080/project-tt/asbab/public/payment");
            exit();
        }
    //Get district in Province with ajax
        public function getDistrict () {
            if (isset($_POST['get_province'])) {
                $province_id = $_POST['get_province'] ;
                $this->link_view("master2",[
                    "page" => "ListDistrict" ,
                    "district" => $this->dataProvince->getListDistrict($province_id)
                ]);
            }
        }
    //
        public function getCheckout () {
            session_start();
            if (empty($_POST['ship-method'])) {
                $_SESSION['form-bill'] = "Please pick radio shipping method !";
                header("location:http://localhost:8080/project-tt/asbab/public/payment");
                exit();
            }
//
            if (empty($_POST['txh_name']) || empty($_POST['txt_email']) || empty($_POST['txt_phone']) || empty($_POST['District']) ) {
                $_SESSION['form-bill'] = "Please fill in the input blank !";
                header("location:http://localhost:8080/project-tt/asbab/public/payment");
                exit();
            }
//
            if (isset($_POST['submit'])) {
                $checkout = new checkout();
                $checkout->txt_phone = $_POST['txt_phone'];
                $checkout->txh_name = $_POST['txh_name'];
                $checkout->txt_email = $_POST['txt_email'];
                $checkout->price = $_POST['txt_gia'];
                $checkout->setCheckout();
            }
        }
    }