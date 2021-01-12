<?php

class report extends controller
{
    public function product()
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        $data = $this->model('productModel')->listview();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('report/product/index',['data' => $data]);
        $this->render('site/footer');

    }

    public function customer()
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('report/customer');
        $this->render('site/footer');
    }
}