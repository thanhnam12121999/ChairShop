<?php
   class Home extends Controller
   {
       public function __construct()
       {
           session_start();
           if (empty($_SESSION['username']))
           {
               header("location:http://localhost:8080/project-tt/asbab/public/login");
               exit();
           }
            $this->dataProduct = $this->link_model("Product");
            $this->dataBanner = $this->link_model("Banner");
            $this->dataNotification = $this->link_model("Notification");
            $this->dataSlide = $this->link_model("Slide");
       }

       public function index()
   	   {
            $this->link_view("master1",[
                "page" => "home",
                "data" => $this->dataProduct->model_home1(),
                "newproduct" => $this->dataProduct->productNew(),
                "goodproduct" => $this->dataBanner->GoodProduct(),
                "bestNumberBuy" => $this->dataProduct->getProductSale(),
                "getProductPercentSale" => $this->dataProduct->getProductPercentSale(),
                "getListCart" => $this->dataProduct->getListCart(),
                "notification" => $this->dataNotification->getNotification(),
                "slideImg" => $this->dataSlide->getSlideImg()
            ]);
//            require_once "../mvc/view/master1.php";
   	   }


   }
?>