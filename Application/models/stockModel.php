<?php

class stockModel extends model
{
    public function listview()
    {
        $query = $this->db->prepare("select * from stok");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($urunid,$musteriid,$islemtipi,$adet,$fiyat,$kasaid)
    {
        $query = $this->db->prepare("insert into stok(urunid,musteriid,islemtipi,adet,fiyat,tarih,kasaid) values (?,?,?,?,?,?,?)");
        $date = date("Y-m-d");
        $insert = $query->execute(array($urunid,$musteriid,$islemtipi,$adet,$fiyat,$date,$kasaid));
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
        $query = $this->db->prepare("select * from stok where id=?");
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateData($id,$urunid,$musteriid,$islemtipi,$adet,$fiyat,$kasaid)
    {
        $query = $this->db->prepare("update stok set urunid=?,musteriid=?,islemtipi=?,adet=?,fiyat=?,kasaid=? where id=?");
        $update = $query->execute(array($urunid,$musteriid,$islemtipi,$adet,$fiyat,$kasaid,$id));
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
        $query = $this->db->prepare("delete from stok where id=?");
        $query->execute(array($id));
    }


}