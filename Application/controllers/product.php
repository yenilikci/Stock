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

    public function create()
    {
        $category = $this->model('categoryModel')->listview();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('product/create',['category' => $category]);
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
            $kategoriId = intval($_POST['kategoriId']);
            $ozellikler = json_encode($_POST['ozellik']);
            if (!$ad = "")
            {
                $insert = $this->model('productModel')->create($ad,$kategoriId,$ozellikler);
                if ($insert)
                {
                    helper::flashData('statu','Ürün ekleme başarılı!');
                    helper::redirect(SITE_URL."/product/create");
                }
                else
                {
                    helper::flashData('statu','Ürün eklenemedi!');
                    helper::redirect(SITE_URL."/product/create");
                }
            }
            else
            {
                helper::flashData('statu','Ürün adı boş bırakılamaz!');
                helper::redirect(SITE_URL."/product/create");
            }
        }
        else
        {
            exit("Yasaklı giriş!");
        }
    }
}