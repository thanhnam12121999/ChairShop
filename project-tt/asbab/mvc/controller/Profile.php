<?php
    require_once '../mvc/core/Upfile/upSingleFile.php';

    class Profile extends Controller
    {
        public function __construct()
        {
            session_start();
            if (empty($_SESSION['username']))
            {
                header("location:http://localhost:8080/project-tt/asbab/public/login");
                exit();
            }
            $this->dataCustomer = $this->link_model("Customer");
        }
        public function index ()
        {
            $username = $_SESSION['username'];
            $this->link_view("master1",[
                "page" => "profile",
                "data" => $this->dataCustomer->getUserByUsername($username)
            ]);
        }
        public function updateInfor ($id)
        {
            if(!isset($_POST['submit']))
            {
                header("location:http://localhost:8080/project-tt/asbab/public/profile");
                exit();
            }
            $upSingleFile = new upSingleFile();

            if (!empty($_FILES['image']['name'])) {
                $link = '../assets/images/customer/';
                if (!$upSingleFile->upFile($link))
                {
                    $_SESSION['error'] = "This file format is not supported";
                    header("location:http://localhost:8080/project-tt/asbab/public/profile");
                    exit();
                }
                    $filename = $upSingleFile->filename;
            } else {
                $file = $this->dataCustomer->getAvatar($id);//get img default
                $filename = $file[0]["avatar"];
                if (empty($file)) {
                    $filename = NULL;
                }
            }
            $dataCustomer = [
                'id' => $id,
                'fullname' => $_POST['fullname'],
                'birthday' => $_POST['birthday'],
                'address' => $_POST['address'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'avatar' => $filename
            ];
            $this->dataCustomer->getUpdateFile($dataCustomer);
            header("location:http://localhost:8080/project-tt/asbab/public/profile");
            exit();
        }
    }
