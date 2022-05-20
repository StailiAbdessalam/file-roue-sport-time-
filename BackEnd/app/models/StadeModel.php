<?php

class StadeModel
{


    public function insert($data)
    {
        $ModelClients = new GlobalModel("stadium");
        $CLIENT = $ModelClients->insert($data);
        return $CLIENT;
    }
}
