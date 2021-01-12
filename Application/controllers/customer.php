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
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        if ($_POST)
        {
            $ad = helper::cleaner($_POST['ad']);
            $soyad = helper::cleaner($_POST['soyad']);
            $sirket = helper::cleaner($_POST['sirket']);
            $email = helper::cleaner($_POST['email']);
            $telefon = helper::cleaner($_POST['telefon']);
            $adres = helper::cleaner($_POST['adres']);
            $tc = helper::cleaner($_POST['tc']);
            $not = helper::cleaner($_POST['notu']);
            if ($ad != "" and $soyad !="")
            {
                $insert = $this->model('customerModel')->create($ad,$soyad,$sirket,$email,$telefon,$adres,$tc,$not);
                if ($insert)
                {
                    helper::flashData('statu','Müşteri başarıyla eklendi!');
                    helper::redirect(SITE_URL."/customer/create");
                }
                else
                {
                    helper::flashData('statu','Müşteri eklenemedi!');
                    helper::redirect(SITE_URL."/customer/create");
                }
            }
            else
            {
                helper::flashData('statu','Müşteri adı ve soyadı boş bırakılamaz!');
                helper::redirect(SITE_URL."/customer/create");
            }
        }
        else
        {
            exit("yasaklı giriş");
        }
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
            $soyad = helper::cleaner($_POST['soyad']);
            $sirket = helper::cleaner($_POST['sirket']);
            $email = helper::cleaner($_POST['email']);
            $telefon = helper::cleaner($_POST['telefon']);
            $adres = helper::cleaner($_POST['adres']);
            $tc = helper::cleaner($_POST['tc']);
            $not = helper::cleaner($_POST['notu']);
            if ($ad != "" and $soyad !="")
            {
                $insert = $this->model('customerModel')->updateData($id,$ad,$soyad,$sirket,$email,$telefon,$adres,$tc,$not);
                if ($insert)
                {
                    helper::flashData('statu','Müşteri başarıyla düzenlendi!');
                    helper::redirect(SITE_URL."/customer/edit/".$id);
                }
                else
                {
                    helper::flashData('statu','Müşteri düzenlenemedi!');
                    helper::redirect(SITE_URL."/customer/edit/".$id);
                }
            }
            else
            {
                helper::flashData('statu','Müşteri adı ve soyadı boş bırakılamaz!');
                helper::redirect(SITE_URL."/customer/edit".$id);
            }
        }
        else
        {
            exit("yasaklı giriş");
        }
    }

    public function delete($id)
    {
        if (!   $this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        $this->model('customerModel')->delete($id);
        helper::redirect(SITE_URL."/customer");
    }

}
