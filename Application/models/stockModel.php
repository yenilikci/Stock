<?php

class stockModel extends model
{
    public function listview()
    {
        $query = $this->db->prepare("select * from stok");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


}