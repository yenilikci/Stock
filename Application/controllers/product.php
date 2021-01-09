<?php

class product extends controller
{
    public function index()
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        $data = $this->model('productModel')->listview();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('product/index',['data' => $data]);
        $this->render('site/footer');
    }

    public function create()
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
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
            if ($ad)
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

    public function edit($id)
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        $category = $this->model('categoryModel')->listview();
        $data = $this->model('productModel')->getData($id);
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('product/edit',['category' => $category,'data'=>$data]);
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
            $kategoriId = intval($_POST['kategoriId']);
            $ozellikler = json_encode($_POST['ozellik']);
            if ($ad)
            {
                $insert = $this->model('productModel')->updateData($id,$ad,$kategoriId,$ozellikler);
                if ($insert)
                {
                    helper::flashData('statu','Ürün düzenleme başarılı!');
                    helper::redirect(SITE_URL."/product/edit/".$id);
                }
                else
                {
                    helper::flashData('statu','Ürün düzenlenemedi!');
                    helper::redirect(SITE_URL."/product/edit/".$id);
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

    public function delete($id)
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        $this->model('productModel')->getDelete($id);
        helper::redirect(SITE_URL."/product");
    }
}