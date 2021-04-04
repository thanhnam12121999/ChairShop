<?php 

	class App 
	{	
	  protected $controller = "Home";
	  protected $action = "index";
	  protected $param =[];

		public function __construct($check)
		{
			$getlink = $this->get_url();
// kiểm tra controller có tồn tại không--start
    //check fontend
            if ($check == "fontend")
            {
                if (file_exists("../mvc/controller/".$getlink[0].".php")) {
                    $this->controller = $getlink[0];
                    unset($getlink[0]);
                    require_once "../mvc/controller/".$this->controller.".php";
                    $this->controller = new $this->controller;
                } else {
                    require_once "../mvc/controller/".$this->controller.".php";
                    $this->controller = new $this->controller;
                }
            }
    //check backend
            if ($check == "backend")
            {
                if (file_exists("../../mvc/controller/Backend/".$getlink[0].".php"))
                {
                    $this->controller = $getlink[0];
                    unset($getlink[0]);
                    require_once "../../mvc/controller/Backend/".$this->controller.".php";
                    $this->controller = new $this->controller;
                } else {
                    $this->controller = "dashboard";
                    require_once "../../mvc/controller/Backend/".$this->controller.".php";
                    $this->controller = new $this->controller;
                }
            }
//kiểm tra func action có tồn tại không--end

            if(isset($getlink[1])){
                if (method_exists($this->controller, $getlink[1])){
                    $this->action = $getlink[1];
                }
                unset($getlink[1]);
            }
//gán param bằng ele trong array -> gọi đến func
            $this->param = $getlink?array_values($getlink):[];
            if (isset($getlink)){
                call_user_func_array([$this->controller,$this->action], $this->param);
            }
		}
		public function get_url()
		{
			if (isset($_GET['url'])) {
				return explode("/",filter_var(trim($_GET['url'],"/")));
			}
		}
	}
