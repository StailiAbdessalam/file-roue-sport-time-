<?php
require_once APPROOT . '/config/config.php';
require_once APPROOT . "../config/Function.php";
class RDVModel
{
    protected $db;
    public function __construct()
    {
        $con = new Database();
        $this->db = $con->dbh;
    }
    public function selectAll($id)
    {
        $conn = $this->db;
        $requete  = "SELECT * FROM `reservation` where id_utilisateur=$id";
        $stm = $conn->prepare($requete);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function remove($id)
    {
        $conn = $this->db;
        $requete  = "DELETE FROM `reservation` WHERE id=$id";
        $stm = $conn->prepare($requete);
        $stm->execute();
    }

    public function insertRDV($data)
    {
        $conn = $this->db;
        $requete  = "INSERT INTO `reservation`(`id_utilisateur`,`Sujet`, `date`, `creneau`) VALUES (?,?,?,?)";
        $stm = $conn->prepare($requete);
        $result = $stm->execute($data);
        return $result;
    }

    public function deleteRDV($id)
    {
        $conn = $this->db;
        $requet = "DELETE FROM `reservation` WHERE id=" . $id;
        $stmn = $conn->prepare($requet);
        return $stmn->execute();
    }

    public function updateRDV($data, $id)
    {
        $conn = $this->db;
        $query = $conn->prepare("UPDATE `reservation` SET
                                    `Sujet`=:Sujet,
                                    `date`=:date,
                                    `creneau`=:creneau
                                    WHERE `id`=:id");
        // var_dump($data);

        $query->bindParam(':id', $id);
        $query->bindParam(':Sujet', $data[2]);
        $query->bindParam(':date', $data[3]);
        $query->bindParam(':creneau', $data[4]);
        return $query->execute();
    }
    public function slectcreneau($date)
    {
        $conn = $this->db;
        $requete  = "SELECT creneau FROM `reservation` where date=$date";
        $stm = $conn->prepare($requete);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
