<?php
    class Login extends Controller
    {
        public function __construct()
        {
            session_start();
            $this->dataUser = $this->link_model2("User");
        }
//
        public function index ()
        {
            $this->link_view2("master4",[
                "page" => "login"
            ]);
        }
//
        public function getCheckUser()
        {
            $username = $_POST['email'];
            $password = $_POST['password'];
            $passwordSave = sha1($password);
            //
//            if (!empty($_COOKIE["password"]) && ($password == $_COOKIE["password"]) ) {
//                $passwordSave = $password;
//            }
//check exist account on database (if exist creat session username)
            $this->result = $this->dataUser->getCheckUser($username,$passwordSave);

            if ($this->result == "false") {
                $_SESSION['errorLogBacke'] = "Please check username or password again !";
                header("location:http://localhost:8080/project-tt/asbab/public/backend/login");
                exit();
            }
            if ($this->result != "false") {
                $user = $this->result;
                foreach ($user as $key => $value)
                {
                    $_SESSION['nameBackend'] = $value['name'];
                    $_SESSION['JobBackend'] = $value['job'];
                }
                header("location:http://localhost:8080/project-tt/asbab/public/backend/dashboard");
                exit();
            }
        }
//sign out
        public function signOut ()
        {
            session_destroy();
            header("location:http://localhost:8080/project-tt/asbab/public/backend/login");
            exit();
        }
    }