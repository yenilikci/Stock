<?php

class productModel extends model
{
    public function listview()
    {
        $query = $this->db->prepare('select * from urunler');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($ad,$kategoriId,$ozellikler)
    {
        $query = $this->db->prepare("insert into urunler(ad,kategoriid,ozellikler,tarih) values(?,?,?,?)");
        $date = date('Y-m-d');
        $insert = $query->execute(array($ad,$kategoriId,$ozellikler,$date));
        if ($insert)
        {
            return true;
        }
        else {
            return false;
        }   
    }

}