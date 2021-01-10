<?php

class customer extends controller
{
    public function index()
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        $data = $this->model('customerModel')->listview();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('customer/index',['data' => $data]);
        $this->render('site/footer');
    }

    public function create()
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        $data = $this->model('customerModel')->listview();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('customer/create');
        $this->render('site/footer');
    }

    public function send()
    {

    }

    public function edit($id)
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        $data = $this->model('customerModel')->getData($id);
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('customer/edit',['data'=>$data]);
        $this->render('site/footer');
    }


}
