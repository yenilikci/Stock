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
        $urunler = $this->model('productModel')->listview();
        $musteriler = $this->model('customerModel')->listview();
        $kasalar = $this->model('stockCaseModel')->listview();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('stock/create',['urunler' => $urunler,'musteriler' => $musteriler,'kasalar' => $kasalar]);
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
            $urunid = intval($_POST['urunid']);
            $musteriid = intval($_POST['musteriid']);
            $islemtipi = intval($_POST['islemtipi']);
            $adet = intval($_POST['adet']);
            $fiyat = helper::cleaner($_POST['fiyat']);
            $kasaid = intval($_POST['kasaid']);
            if ($adet != 0 and $fiyat != "")
            {
                $insert = $this->model('stockModel')->create($urunid,$musteriid,$islemtipi,$adet,$fiyat,$kasaid );
                if ($insert)
                {
                    helper::flashData('statu',"Stok bilgisi başarı ile eklendi!");
                    helper::redirect(SITE_URL."/stock/create/");
                }
                else
                {
                    helper::flashData('statu',"Stok bilgisi eklenemedi!");
                    helper::redirect(SITE_URL."/stock/create/");
                }
            }
            else
            {
                helper::flashData('statu',"Ürün fiyat ve adeti boş bırakılamaz!");
                helper::redirect(SITE_URL."stock/create/");
            }
        }
        else
        {
            exit("Yasaklı giriş");
        }

    }

    public function edit($id)
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        $urunler = $this->model('productModel')->listview();
        $musteriler = $this->model('customerModel')->listview();
        $kasalar = $this->model('stockCaseModel')->listview();
        $data = $this->model('stockModel')->getData($id);
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('stock/edit',['data' => $data,'urunler' => $urunler, 'musteriler' => $musteriler,'kasalar' => $kasalar]);
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
            $urunid = intval($_POST['urunid']);
            $musteriid = intval($_POST['musteriid']);
            $islemtipi = intval($_POST['islemtipi']);
            $adet = intval($_POST['adet']);
            $fiyat = helper::cleaner($_POST['fiyat']);
            $kasaid = intval($_POST['kasaid']);
            if ($adet != 0 and $fiyat != "")
            {
                $update = $this->model('stockModel')->updateData($id,$urunid,$musteriid,$islemtipi,$adet,$fiyat,$kasaid);
                if ($update)
                {
                    helper::flashData('statu',"Stok bilgisi başarı ile düzenlendi!");
                    helper::redirect(SITE_URL."/stock/edit/".$id);
                }
                else
                {
                    helper::flashData('statu',"Stok bilgisi düzenlenemedi!");
                    helper::redirect(SITE_URL."/stock/edit/".$id);
                }
            }
            else
            {
                helper::flashData('statu',"Ürün fiyat ve adeti boş bırakılamaz!");
                helper::redirect(SITE_URL."stock/edit/");
            }
        }
        else
        {
            exit("Yasaklı giriş");
        }

    }

    public function delete($id)
    {
        if (!$this->sessionManager->isLogged())
        {
            helper::redirect(SITE_URL);
            die();
        }
        $this->model('stockModel')->getDelete($id);
        helper::redirect(SITE_URL."/stock");
    }

}