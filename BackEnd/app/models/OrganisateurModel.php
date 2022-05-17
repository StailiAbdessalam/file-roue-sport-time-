<?php
// require_once "../libraries/GlobalModel.php";
// get_include_path("../libraries/GlobalModel.php");
class OrganisateurModel
{
    public function insert($data)
    {
        $ModelClients = new GlobalModel("organisateur");
        $CLIENT = $ModelClients->insert($data);
        json_encode($CLIENT);
    }
    public function fetchByRef($Ref)
    {
        $ModelClients = new GlobalModel("organisateur");
        $CLIENT = $ModelClients->fetchByRef($Ref);
        return $CLIENT;
    }

    public function updatesuspended($data)
    {
        $ModelClients = new GlobalModel("organisateur");
        $CLIENT = $ModelClients->updatesuspended($data);
        return $CLIENT;
    }

    public function insertLocal($data)
    {
        $ModelClients = new GlobalModel("local");
        $CLIENT = $ModelClients->insert($data);
        return $CLIENT;
    }

    public function selectDemandeOrg()
    {
        $ModelClients = new GlobalModel("organisateur");
        $CLIENT = $ModelClients->selectDemandeOrg();
        return $CLIENT;
    }
    public function DeleteDemande($data)
    {
        $ModelOrg = new GlobalModel("organisateur");
        $DElet = $ModelOrg->Delete($data->idOrganisateur);
        $Modelloacl = new GlobalModel("local");
        $DElet = $Modelloacl->Delete($data->id);
        return $DElet;
    }
    public function ValideDemande($data)
    {
        $ModelOrg = new GlobalModel("organisateur");
        $DElet = $ModelOrg->updatesuspended($data);
        return $DElet;
    }

    public function selectOrg()
    {
        $ModelClients = new GlobalModel("organisateur");
        $CLIENT = $ModelClients->selectAllOrganisateur();
        return $CLIENT;
    }
    public function ArchiverDemande($data){
        $ModelClients = new GlobalModel("organisateur");
        $CLIENT = $ModelClients->updatesuspended($data);
        return $CLIENT;
    }
















    public function selectAll()
    {
        $ModelClients = new GlobalModel("organisateur");
        $CLIENT = $ModelClients->selectAll();
        return json_encode($CLIENT);
    }
    public function SelectOne($id)
    {
        $ModelClients = new GlobalModel("organisateur");
        $CLIENT = $ModelClients->SelectOne($id);
        json_encode($CLIENT);
    }
    public function remove($id)
    {
        $ModelClients = new GlobalModel("organisateur");
        $CLIENTS = $ModelClients->remove($id);
        return $CLIENTS;
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
