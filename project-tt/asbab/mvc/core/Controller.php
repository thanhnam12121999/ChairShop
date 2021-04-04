<?php
    class Controller
    {
        public function link_model($model_home)
        {
            require_once "../mvc/Model/".$model_home.".php";
            return new $model_home;
        }
//
        public function link_model2($model_home)
        {
            require_once "../../mvc/Model/".$model_home.".php";
            return new $model_home;
        }
//link view fontend
        public function link_view($model_home,$link_view1 =[])
        {
            require_once "../mvc/view/".$model_home.".php";
        }
//link view backend
        public function link_view2($model_home,$link_view2 =[])
        {
            require_once "../../mvc/view/".$model_home.".php";
        }
    }
