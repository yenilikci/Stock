<?php

class customerModel extends model
{
    public function listview()
    {
        $query = $this->db->prepare("select * from musteriler");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}