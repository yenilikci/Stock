<?php

class reportModel extends model
{
    public function girenUrunToplam($id)
    {
        $query = $this->db->prepare("select SUM(fiyat),adet from stok where urunid=? and islemtipi='0'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return $sonuc['SUM(fiyat)']*$sonuc['adet'];
    }

    public function cikanUrunToplam($id)
    {
        $query = $this->db->prepare("select SUM(fiyat),adet from stok where urunid=? and islemtipi='1'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return $sonuc['SUM(fiyat)'] * $sonuc['adet'];
    }

    public function girenUrunAdet($id)
    {
        $query = $this->db->prepare("select SUM(adet) from stok where urunid=? and islemtipi='0'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return $sonuc['SUM(adet)'];
    }

    public function cikanUrunAdet($id)
    {
        $query = $this->db->prepare("select SUM(adet) from stok where urunid=? and islemtipi='1'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return $sonuc['SUM(adet)'];
    }

}