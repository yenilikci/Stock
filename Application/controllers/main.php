<?php

class main extends controller
{
    public function index()
    {
        $metin = "insert into values <script>alert('hack')</script> <br>";
        echo helper::cleaner($metin);
        $this->render("index",["name"=>"melih","surname"=>"çelik"]);
    }
}