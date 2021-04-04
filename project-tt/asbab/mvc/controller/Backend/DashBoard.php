<?php
    class DashBoard extends Controller
    {
        public function __construct()
        {
            session_start();
            if (empty($_SESSION['nameBackend']))
            {
                header("location:http://localhost:8080/project-tt/asbab/public/backend/login");
                exit();
            }
        }
//
        public function index()
        {
            $this->link_view2("master3",[
                "page" => "index",
                "folder" => "dashboard"
            ]);
        }
}
