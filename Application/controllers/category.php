<?php

class category extends controller
{
    public function create()
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        else
        {
            $this->render("site/header");
            $this->render("site/sidebar");
            $this->render("category/create");
            $this->render("site/footer");
        }
    }

    public function send()
    {
        if ($_POST)
        {
            $ad = helper::cleaner($_POST['ad']);
            if ($ad != '')
            {
                $ekle = $this->model('categoryModel')->create($ad);
                if ($ekle)
                {
                    helper::flashData("statu","Kategori başarıyla eklendi!");
                    helper::redirect(SITE_URL."/category/create");
                }
                else
                {
                    helper::flashData("statu","Kategori Eklenemedi!");
                    helper::redirect(SITE_URL."/category/create");
                }
            }
            else
            {
                helper::flashData("statu","Lütfen tüm alanları giriniz");
                helper::redirect(SITE_URL."/category/create");
            }
        }
        else
        {
            exit("Giriş yok!");
        }
    }

}