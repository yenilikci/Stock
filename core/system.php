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

       if (file_exists($this->controllerPath."/".$url[0].".php"))
       {
           $this->controller = $url[0];
       }
       require_once $this->controllerPath."/".$this->controller.".php";
       $this->controller = new $this->controller;
    }
}