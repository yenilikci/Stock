<?php
class system{
    protected $controllerPath = "Application/controllers";
    protected $controller;
    protected $method;
    public function __construct()
    {
        $this->controller = "main";
        $this->method = "index";
       if (isset($_GET["act"]))
       {
           $url = explode('/',filter_var(rtrim($_GET["act"],'/'),FILTER_SANITIZE_URL));
       }
       else
           {
           $url = "";
       }

       //Controller Bulmak İçin
       if (file_exists($this->controllerPath."/".$url[0].".php")) {
           $this->controller = $url[0];
       }
       require_once $this->controllerPath."/".$this->controller.".php";

       if (class_exists($this->controller))
       {
           $this->controller = new $this->controller;
           array_shift($url);
       }
       else
       {
           exit("böyle bir sınıf bulunamadı");
       }

       //Method Bulmak İçin
        if (isset($url[0]))
        {
            if (method_exists($this->controller,$url[0]))
            {
                $this->method = $url[0];
                array_shift($url);
            }
        }

        //
        call_user_func_array([$this->controller,$this->method],$url);

    }
}