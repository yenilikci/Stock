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
        $data = $this->model('customerModel')->listview();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('report/customer/index',['data'=>$data]);
        $this->render('site/footer');
    }

    public function date()
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }

        if (isset($_GET['firstDate']) and isset($_GET['lastDate']))
        {
            $data = $this->model('reportModel')->filtrele($_GET['firstDate'],$_GET['lastDate']);
        }
        else
        {
            $data = $this->model('reportModel')->filtrele(date("Y-m-01"),date("Y-m-d"));
        }

        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('report/date/index',['data'=>$data]);
        $this->render('site/footer');
    }
}