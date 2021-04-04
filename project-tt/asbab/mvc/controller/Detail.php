<?php
    class Detail extends Controller
    {
        public function __construct()
        {
            $this->dataProduct  = $this->link_model("Product");
            $this->dataImage  = $this->link_model("ImageProduct");
        }
//
        public function index ($id) {
            session_start();
            if (empty($_SESSION['username']))
            {
                header("location:http://localhost:8080/project-tt/asbab/public/register");
                exit();
            }
//
            $this->link_view("master1",[
                "page" => "detail",
                "data" => $this->dataProduct->getIdProduct($id),
                "getListCart" => $this->dataProduct->getListCart(),
                "images" => $this->dataImage->getListImage($id)
            ]);
        }
//
        public function addToCart()
        {
            session_start();
            if (!isset($_SESSION["cart"])) {
                $_SESSION["cart"] = array();
            }
//

            if (isset($_POST['quantity'])) {
                foreach ($_POST['quantity'] as $key => $value) {
                    $_SESSION["cart"][$key] = $value;
                }
            }
//
            header("location:http://localhost:8080/project-tt/asbab/public/cart");
            exit();
        }
//delete element product in cart .
        public function deletePro($id) {
            session_start();
            if (isset($_SESSION["cart"])) {
                unset($_SESSION["cart"][$id]);
            }
            header("location:http://localhost:8080/project-tt/asbab/public/home");
            exit();
        }
}