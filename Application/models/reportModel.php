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

    public function toplamAlinanUrun($id) //müşteri id
    {
        $query = $this->db->prepare("select SUM(adet) from stok where musteriid=? and islemtipi='0'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return $sonuc['SUM(adet)'];
    }

    public function toplamSatilanUrun($id) //müşteri id
    {
        $query = $this->db->prepare("select SUM(adet) from stok where musteriid=? and islemtipi='1'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return intval($sonuc['SUM(adet)']);
    }
    
    public function toplamKazanilanPara($id) //müşteri id
    {
        $query = $this->db->prepare("select SUM(fiyat),adet from stok where musteriid=? and islemtipi='1'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return $sonuc['SUM(fiyat)']*$sonuc['adet'];
    }

    public function toplamKaybedilenPara($id) //müşteri id
    {
        $query = $this->db->prepare("select SUM(fiyat),adet from stok where musteriid=? and islemtipi='0'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return $sonuc['SUM(fiyat)']*$sonuc['adet'];
    }

    public function filtrele($firstDate,$lastDate)
    {
        $query = $this->db->prepare("select * from stok where tarih between  ? and ? group by urunid");
        $query->execute(array($firstDate,$lastDate));
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}