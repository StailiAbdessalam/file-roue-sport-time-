<?php
require_once "../libraries/GModel.php";
class AdminModel
{
    public function selectAll()
    {
        $ModelClients = new GlobalModel("Clients");
        $CLIENT = $ModelClients->selectAll();
        json_encode($CLIENT);
    }

    public function SelectOne($id)
    {
        $ModelClients = new GlobalModel("Clients");
        $CLIENT = $ModelClients->SelectOne($id);
        json_encode($CLIENT);
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
    public function fetchByRef($ref)
    {
        $ModelClients = new GlobalModel("Clients");
        $CLIENT = $ModelClients->fetchByRef($ref);
        json_encode($CLIENT);
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
        // var_dump($data);
        // $query->bindParam(':id', $id);
        // $query->bindParam(':Nom', $data[4]);
        // $query->bindParam(':Prenom', $data["Prenom"]);
        // $query->bindParam(':Age', $data["Age"]);
        // $query->bindParam(':Job', $data["Job"]);
        // $query->bindParam(':CIN', $data["CIN"]);
        $params = array($data["Nom"], $data["Prenom"], $data["Age"], $data["Job"], $data["CIN"], $data["id"]);
        return $query->execute($params);
    }
}
