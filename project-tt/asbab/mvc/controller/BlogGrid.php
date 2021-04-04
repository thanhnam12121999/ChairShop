<?php
    class BlogGrid extends Controller
    {
        public function __construct()
        {
            session_start();
            if (empty($_SESSION['username']))
            {
                header("location:http://localhost:8080/project-tt/asbab/public/login");
                exit();
            }
            $this->dataBlog = $this->link_model("Blog");
        }
//
        public function index ()
        {
            $this->link_view("master1",[
                "page" => "blog",
                "data" => $this->dataBlog->getAllBlog(),
            ]);
        }
//        detail
        public function detail ($id = "")
        {
            if (empty($id))
            {
                header("location:http://localhost:8080/project-tt/asbab/public/bloggrid");
                exit();
            }
            $this->link_view("master1",[
                "page" => "blogDetail",
                "data" => $this->dataBlog->getBlogDetail($id),
            ]);
        }
    }