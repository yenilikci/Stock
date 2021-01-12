<?php

class customerModel extends model
{
    public function listview()
    {
        $query = $this->db->prepare("select * from musteriler");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($ad,$soyad,$sirket,$email,$telefon,$adres,$tc,$notu)
    {
        $query = $this->db->prepare("insert into musteriler(ad,soyad,email,telefon,adres,tc,notu,sirket,tarih) values(?,?,?,?,?,?,?,?,?)");
        $date = date('Y-m-d');
        $insert = $query->execute(array($ad,$soyad,$email,$telefon,$adres,$tc,$notu,$sirket,$date));
        if ($insert)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getData($id)
    {
        $query = $this->db->prepare("select * from musteriler where id=?");
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateData($id,$ad,$soyad,$sirket,$email,$telefon,$adres,$tc,$notu)
    {
        $query = $this->db->prepare("update musteriler set ad=?,soyad=?,email=?,telefon=?,adres=?,tc=?,notu=?,sirket=? where id=?");
        $update = $query->execute(array($ad,$soyad,$email,$telefon,$adres,$tc,$notu,$sirket,$id));
        if ($update)
        {
            return true;
        }
        else
        {
            false;
        }
    }

    public function delete($id)
    {
        $query = $this->db->prepare("delete from musteriler where id=?");
        $query->execute(array($id));
    }


}