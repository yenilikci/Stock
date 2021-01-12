<?php
class stock extends controller
{
    public function index()
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        $data = $this->model('stockModel')->listview();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('stock/index',['data' => $data]);
        $this->render('site/footer');
    }

    public function create()
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('stock/index');
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
        $data = $this->model('stockModel')->getData($id);
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('stock/edit',['data' => $data]);
        $this->render('site/footer');
    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }

}