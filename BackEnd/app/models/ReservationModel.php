<?php
class ReservationModel
{
    public function __construct()
    {
    }
    public function insert($data)
    {
        $ModelClients = new GlobalModel("reservation");
        $CLIENT = $ModelClients->insert($data);
        return $CLIENT;
    }
}
