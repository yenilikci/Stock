<?php

class stockModel extends model
{
    public function listview()
    {
        $query = $this->db->prepare("select * from stok");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($urunid,$musteriid,$islemtipi,$adet,$fiyat)
    {
        $query = $this->db->prepare("insert into stok(urunid,musteriid,islemtipi,adet,fiyat,tarih) values (?,?,?,?,?,?)");
        $date = date("Y-m-d");
        $insert = $query->execute(array($urunid,$musteriid,$islemtipi,$adet,$fiyat,$date));
        if ($insert)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


}