<?php
    class Cart extends Controller
    {
        public function __construct()
        {
            session_start();
            if (empty($_SESSION['username']))
            {
                header("location:http://localhost:8080/project-tt/asbab/public/register");
                exit();
            }
            $this->dataProduct = $this->link_model("product");
            $this->dataDiscount = $this->link_model("Discount");
        }
//
        public function index() {
//
            $this->link_view("master1",[
                "page" => "cart",
                "getListCart" => $this->dataProduct->getListCart()
            ]);
        }
        public function updateToCart()
        {
            if (!isset($_SESSION["cart"])) {
                $_SESSION["cart"] = array();
            }
    //
            if (isset($_POST['submit'])) {
                foreach ($_POST['quantity'] as $key => $value) {
                    $_SESSION["cart"][$key] = $value;
                }
            }
    //
            header("location:http://localhost:8080/project-tt/asbab/public/cart");
            exit();
        }
//
        public function deletePro($id) {
            if (isset($_SESSION["cart"])) {
                unset($_SESSION["cart"][$id]);
            }
            header("location:http://localhost:8080/project-tt/asbab/public/cart");
            exit();
        }
// check code discount
        public function checkCodeDiscount() {
            $code_discount = "";
            if (isset($_POST['code_discount'])) {
                $code_discount = $_POST['code_discount'];
            }
            $time_now = date("Y-m-d") ;
            if (isset($_POST['submit'])) {
                $result = $this->dataDiscount->getCheckCodeDiscount($code_discount,$time_now) ;
                if ($result) {
                    $this->link_view("master1",[
                        "page" => "cart",
                        "getListCart" => $this->dataProduct->getListCart(),
                        "checkDiscount" => $result
                    ]);
                }else{
                    header("location:http://localhost:8080/project-tt/asbab/public/cart");
                    exit();
                }
            }
        }
    }