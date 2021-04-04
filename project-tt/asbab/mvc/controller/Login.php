<?php
    class Login extends Controller
    {
        public function __construct()
        {
            session_start();
            $this->dataModel  = $this->link_model("Customer");
        }
        public function index()
        {
            $this->link_view("master1",[
                "page" => "login"
            ]);
        }
    //check user have been created
        public function checkUser ()
        {
            if (empty($_POST["nameForm"])) {
                echo  "<p style='color: red'>* Do not leave input form blank!</p>";
                exit();
            }
            $this->result = $this->dataModel->getCheckUser($_POST["nameForm"]);
            if ($this->result) {
                $this->link_view("master2",[
                    "page" => "ShowEleLog"
                ]);
            } else {
                echo  "<p style='color: red'>* This Username not registed yet !</p>";
            }
        }
    //check account exist
        public function checkAccExist ()
        {
            // if not isset button submit
            if (!isset($_POST['submit'])) {
                header("location:http://localhost:8080/project-tt/asbab/public/login");
                exit();
            }
    //check empty input account
            if (!isset($_POST['email-input'])||!isset($_POST['password-input']))
            {
                $_SESSION['error'] = "Please input full infor,do not leave it empty";
                header("location:http://localhost:8080/project-tt/asbab/public/login");
                exit();
            }
            $username = $_POST['email-input'];
            $password = $_POST['password-input'];
            $passwordSave = sha1($password);
            //
            if (!empty($_COOKIE["password"]) && ($password == $_COOKIE["password"]) ) {
                    $passwordSave = $password;
            }
    //check exist account on database (if exist creat session username)
            $this->result = $this->dataModel->getCheckAccExist($username,$passwordSave);
            // account wrong password
            if (!$this->result) {
                $_SESSION['error'] = "Please check password again !";
                header("location:http://localhost:8080/project-tt/asbab/public/login");
                exit();
            }
            $_SESSION['username'] = $username;
    //isset click checkbox remember
            if (isset($_POST['remember-me-checkbox']))
            {
                setcookie("username",$username, time() + (86400 * 30),'/project-tt/asbab/public/login');
                setcookie("password",$passwordSave ,time() + (86400 * 30),'/project-tt/asbab/public/login');
            } else {
                if (isset($_COOKIE["username"]) || isset($_COOKIE["password"])) {
                    setcookie("username","",time() - (86400 * 30),'/project-tt/asbab/public/login');
                    setcookie("password","",time() - (86400 * 30),'/project-tt/asbab/public/login');
                }
            }
            header("location:http://localhost:8080/project-tt/asbab/public/home");
            exit();
        }
        public function getLogout()
        {
            session_destroy();
            header("location:http://localhost:8080/project-tt/asbab/public/login");
            exit();
        }
    }