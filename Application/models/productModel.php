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

    public function getData($id)
    {
        $query = $this->db->prepare("select * from urunler where id=?");
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateData($id,$ad,$kategoriid,$ozellik)
    {
        $query = $this->db->prepare("update urunler SET ad=?,kategoriid=?,ozellikler=? where id=?");
        $update = $query->execute(array($ad,$kategoriid,$ozellik,$id));
        if ($update)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getDelete($id)
    {
        $query = $this->db->prepare("delete from urunler where id=?");
        $query->execute(array($id));
    }

}