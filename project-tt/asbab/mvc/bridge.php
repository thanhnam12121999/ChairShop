<?php
    class Bridge
    {
        public function getAllPageBackend()
        {
            require_once '../../mvc/core/App.php';
            require_once '../../mvc/core/Controller.php';
            require_once'../../mvc/core/DB.php';
        }
//get page fontend
        public function getAllPageFontend()
        {
            require_once '../mvc/core/App.php';
            require_once '../mvc/core/Controller.php';
            require_once'../mvc/core/DB.php';
        }
    }
