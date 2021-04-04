<?php
    class Customer extends DB
    {
        //check account exist | controller (Login)
        public function getCheckUser($userClient)
        {
            $get_user = $this->conn->prepare("select * from customer where (username = '$userClient')");
            $get_user->execute();
            $result2 = $get_user->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($result2)) {
                return  true;
            }else{
                return  false;
            }
        }
        //check account exist | controller (Login)
        public function getCheckAccExist($username,$passwordSave)
        {
            $get_user = $this->conn->prepare("select * from customer where (username = '$username') and (password = '$passwordSave')");
            $get_user->execute();
            $result = $get_user->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($result)) {
                return true;
            } else {
                return  false;
            }
        }
        //
        public function getUserByUsername ($username)
        {
            $get_user = $this->conn->prepare("select * from customer where (username = '$username')");
            $get_user->execute();
            $result = $get_user->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($result)) {
                return $result;
            } else {
                return  "false";
            }
        }
        // up file image
        public function getUpdateFile ($dataCustomer)
        {
            $id = $dataCustomer['id'];
            $get_update = $this->conn->prepare("UPDATE customer SET fullname = ?, avatar = ?, birthday = ?, address = ?, phone = ?, email = ? where (id = '$id')");
            $data = array($dataCustomer['fullname'], $dataCustomer['avatar'], $dataCustomer['birthday'], $dataCustomer['address'], $dataCustomer['phone'], $dataCustomer['email']);
            $get_update->execute($data);
            if (!empty($get_update)) {
                return true;
            } else {
                return false;
            }
        }
        //
        public function getAvatar($id)
        {
            $get_update = $this->conn->prepare("select customer.avatar  from customer where (id = '$id')");
            $get_update->execute();
            $result = $get_update->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($get_update))
            {
                return $result;
            } else {
                return $result;
            }
        }
}