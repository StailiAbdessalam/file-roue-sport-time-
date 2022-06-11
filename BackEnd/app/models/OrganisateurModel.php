<?php
class OrganisateurModel
{
    public function insert($data)
    {
        $ModelClients = new GlobalModel("organisateur");
        $CLIENT = $ModelClients->insert($data);
        return $CLIENT;
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
    public function selectOrg()
    {
        $ModelClients = new GlobalModel("organisateur");
        $CLIENT = $ModelClients->selectAllOrganisateur();
        return $CLIENT;
    }
    public function selectArchive()
    {
        $ModelClients = new GlobalModel("organisateur");
        $CLIENT = $ModelClients->selectArchive();
        return $CLIENT;
    }

    public function getOne($id)
    {
        $ModelClients = new GlobalModel("organisateur");
        $CLIENT = $ModelClients->getOne($id);
        return $CLIENT;
    }
    public function updareprofile($Org, $local, $idOrg, $idlocal)
    {
        $ModelClients = new GlobalModel("organisateur");
        $CLIENT = $ModelClients->UpdateOrg($Org, $idOrg);
        $ModelClients = new GlobalModel("local");
        $CLIENT = $ModelClients->UpdateLocal($local, $idlocal);
        return $CLIENT;
    }
    public function selectAllLocal()
    {
        $ModelClients = new GlobalModel("local");
        $CLIENT = $ModelClients->selectAll();
        return $CLIENT;
    }
    public function selectOneLocal($id)
    {
        $ModelClients = new GlobalModel("organisateur");
        $CLIENT = $ModelClients->selectOneLocal($id);
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
        $params = array($data["Nom"], $data["Prenom"], $data["Age"], $data["Job"], $data["CIN"], $data["id"]);
        return $query->execute($params);
    }
}
