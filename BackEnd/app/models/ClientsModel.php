<?php
class ClientsModel
{
    public function selectAll()
    {
        $ModelClients = new GlobalModel("Clients");
        $CLIENT = $ModelClients->selectAll();
        return json_encode($CLIENT);
    }
    public function SelectOne($id)
    {
        $ModelClients = new GlobalModel("clients");
        $CLIENT = $ModelClients->selectClients($id);
        return $CLIENT;
    }
    public function fetchByMail($email)
    {
        $ModelClients = new GlobalModel("clients");
        $CLIENT = $ModelClients->fetchByMail($email);
        return $CLIENT;
    }
    public function remove($id)
    {
        $ModelClients = new GlobalModel("Clients");
        $CLIENTS = $ModelClients->remove($id);
        return $CLIENTS;
    }
    public function insert($data)
    {
        $ModelClients = new GlobalModel("Clients");
        $CLIENT = $ModelClients->insert($data);
        json_encode($CLIENT);
    }
    public function fetchByRef($Ref)
    {
        $ModelClients = new GlobalModel("Clients");
        $CLIENT = $ModelClients->fetchByRef($Ref);
        return $CLIENT;
    }
    public function updateUser($data)
    {
        $conn = $this->db;
        $query = $conn->prepare("UPDATE `utilisateur` SET
                                `Nom`=?,
                                `Prenom`=?,
                                `Age`=?,
                                `Job`=?,
                                `CIN`=?
                                WHERE id=?");
        $params = array($data["Nom"], $data["Prenom"], $data["Age"], $data["Job"], $data["CIN"], $data["id"]);
        return $query->execute($params);
    }
}



