<?php

class main extends controller
{
    public function index()
    {
        $this->render("uyeler/index",["name"=>"melih","surname"=>"çelik"]);
    }
}