<?php

class StadeModel
{


    public function insert($data)
    {
        $ModelClients = new GlobalModel("stadium");
        $CLIENT = $ModelClients->insert($data);
        return $CLIENT;
    }
    public function getAllStadebyId($data)
    {
        $ModelClients = new GlobalModel("stadium");
        // var_dump($data);
        $CLIENT = $ModelClients->select($data["id"]);
        return $CLIENT;
    }
    public function getAllTime($data)
    {
        
        $ModelClients = new GlobalModel("reservation");
        $CLIENT = $ModelClients->selectAllTime($data);
        return $CLIENT;
    }   
     public function getallReservation($data)
    {
        
        $ModelClients = new GlobalModel("reservation");
        $CLIENT = $ModelClients->selectAllResrbydate($data);
        return $CLIENT;
    }
}
