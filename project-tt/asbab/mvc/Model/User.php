<?php
    class User extends DB
    {
        public function getCheckUser ($username,$passwordSave)
        {
            $get_user = $this->conn->prepare("select * from user where (username = '$username') and (password = '$passwordSave')");
            $get_user->execute();
            $result = $get_user->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($result)) {
                return $result;
            } else {
                return  "false";
            }
        }

    }