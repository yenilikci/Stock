<?php

class stockCaseModel extends model
{
    public function listview()
    {
        $query = $this->db->prepare("select * from kasa");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($ad)
    {
        $query = $this->db->prepare("insert into kasa(ad) values(?)");
        $insert = $query->execute(array($ad));
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