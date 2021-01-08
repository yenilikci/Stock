<?php

class product extends controller
{
    public function index()
    {
        $data = $this->model('productModel')->listview();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('product/index',['data' => $data]);
        $this->render('site/footer');
    }
}