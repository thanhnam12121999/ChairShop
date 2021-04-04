<?php
    class Contact extends DB
    {
        public function updateContact ()
        {
            $date = date('Y-m-d h:i:s');
            $updatecontact  = $this->conn->prepare("INSERT INTO contact (id,fullname,phone,email,tittle,content,created_at,update_at) VALUES (NULL, 'a', '123', 'nam', 'tittle', 'content', '$date', '$date')");
            $updatecontact->execute();
            if ($updatecontact)
            {
                return true;
            }
        }
    }