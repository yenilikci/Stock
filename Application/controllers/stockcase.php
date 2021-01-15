<?php

class stockcase extends controller
{
    public function index()
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        $data = $this->model('stockCaseModel')->listview();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('stockcase/index',['data' => $data]);
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
        $this->render('stockcase/create');
        $this->render('site/footer');
    }

    public function send()
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        if ($_POST)
        {
            $ad = helper::cleaner($_POST['ad']);
            if ($ad != "")
            {
                $insert = $this->model('stockCaseModel')->create($ad);
                if ($insert)
                {
                    helper::flashData("statu","Kasa başarı ile eklendi");
                    helper::redirect(SITE_URL."/stockcase/create");
                }
                else
                {
                    helper::flashData("statu","Kasa eklenemedi");
                    helper::redirect(SITE_URL."/stockcase/create");
                }
            }
            else
            {
                helper::flashData("statu","Kasa adı boş bırakılamaz");
                helper::redirect(SITE_URL."/stockcase/create");
            }
        }
        else
        {
            exit("yasaklı giriş");
        }
    }

    public function edit($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }
        $data = $this->model('stockCaseModel')->getData($id);
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('stockcase/edit', ['data' => $data]);
        $this->render('site/footer');
        $this->render('site/footer');
    }

    public function update($id)
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        if ($_POST)
        {
            $ad = helper::cleaner($_POST['ad']);
            if ($ad != "")
            {
                $insert = $this->model('stockCaseModel')->updateData($id,$ad);
                if ($insert)
                {
                    helper::flashData("statu","Kasa başarı ile düzenlendi");
                    helper::redirect(SITE_URL."/stockcase/edit/".$id);
                }
                else
                {
                    helper::flashData("statu","Kasa düzenlenemedi");
                    helper::redirect(SITE_URL."/stockcase/edit/".$id);
                }
            }
            else
            {
                helper::flashData("statu","Kasa adı boş bırakılamaz");
                helper::redirect(SITE_URL."/stockcase/edit/".$id);
            }
        }
        else
        {
            exit("yasaklı giriş");
        }
    }

    public function delete($id)
    {

    }

}