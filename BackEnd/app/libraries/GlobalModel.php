 <?php
    // require once the connection to the database
    // require_once '../config/config.php';    
    // include_once '../Function.php';
    require_once 'Connection.php';


    // require_once '../config/config.php';
    class GlobalModel
    {
        protected $connection;
        protected $Table;
        public function __construct($Table)
        {
            $con = new Connection();
            $this->connection = $con->db;
            $this->Table = $Table;
        }

        public function insert($data)
        {
            $con = $this->connection;
            $requi = "INSERT INTO " . $this->Table . "(" . $this->getval($data) . ") VALUES (" . $this->getPlaceholders($data) . ") ";
            var_dump($data);
            $stm = $con->prepare($requi);
            $result = $stm->execute($data);
            return $result;
        }

        public function fetchByRef($Ref)
        {
            try {
                $conn = $this->connection;
                $requi = 'SELECT * FROM ' . $this->Table . ' WHERE IdUnique = :Ref';
                $stm = $conn->prepare($requi);
                $stm->execute(["Ref" => $Ref]);
                $result = $stm->fetch(PDO::FETCH_ASSOC);
                return $result;
            } catch (\Throwable $th) {
                return false;
            }
        }

        public function updatesuspended($data)
        {
            $conn = $this->connection;
            $requi = "UPDATE " . $this->Table . " SET
                                 `Suspended`=:Suspended
                                 WHERE id=:id";
            $stm = $conn->prepare($requi);
            $stm->execute(["Suspended" => $data->Suspended, "id" => $data->id]);
            return $stm->fetch(PDO::FETCH_ASSOC);
        }

        public function selectDemandeOrg()
        {
            $conn = $this->connection;
            $requi = "SELECT *  FROM `organisateur` left join local on local.idOrganisateur = organisateur.id WHERE organisateur.suspended = -1";
            $stm = $conn->prepare($requi);
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }


        public function Delete($id)
        {
            $conn = $this->connection;
            $requi = "DELETE FROM `$this->Table` WHERE id = :id";
            $stm = $conn->prepare($requi);
            $stm->execute(["id" => $id]);
            return $stm->fetch(PDO::FETCH_ASSOC);
        }


        public function selectAllOrganisateur()
        {
            $conn = $this->connection;
            $requi = "SELECT *  FROM `organisateur` left join local on local.idOrganisateur = organisateur.id WHERE organisateur.suspended = 1";
            $stm = $conn->prepare($requi);
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function selectOneLocal($id)
        {
            $conn = $this->connection;
            $requi = "SELECT *  FROM `organisateur` left join local on local.idOrganisateur = organisateur.id WHERE local.id = :id";
            $stm = $conn->prepare($requi);
            $stm->execute(["id" => $id]);
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function selectArchive()
        {
            $conn = $this->connection;
            $requi = "SELECT *  FROM `organisateur` left join local on local.idOrganisateur = organisateur.id WHERE organisateur.suspended = 'X'";
            $stm = $conn->prepare($requi);
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function getOne($id)
        {
            $conn = $this->connection;
            $requi = "SELECT *  FROM `organisateur` left join local on local.idOrganisateur = organisateur.id WHERE organisateur.id = :id";
            $stm = $conn->prepare($requi);
            $stm->execute(["id" => $id]);
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        public function UpdateOrg($data, $id)
        {
            $conn = $this->connection;
            $requi = "UPDATE `organisateur` SET `FirstName`=:FirstName,`LastName`=:LastName,`Email`=:Email,`Phone`=:Phone, `business_name`=:business_name  WHERE id=:id";
            $stm = $conn->prepare($requi);
            $stm->execute(["FirstName" => $data["FirstName"], "LastName" => $data["LastName"], "Email" => $data["Email"], "Phone" => $data["Phone"], "business_name" => $data["business_name"], "id" => $id]);
            return $stm->fetch(PDO::FETCH_ASSOC);
        }

        public function UpdateLocal($data, $id)
        {
            $conn = $this->connection;
            $requi = "UPDATE `local` SET `Address`=:Address,`Ville`=:Ville , `About`=:About WHERE id=:id";
            $stm = $conn->prepare($requi);
            $stm->execute(["Address" => $data["Address"], "Ville" => $data["Ville"], "About" => $data["About"], "id" => $id]);
            return $stm->fetch(PDO::FETCH_ASSOC);
        }

        public function selectAll()
        {
            $conn = $this->connection;
            $requi = "SELECT * FROM `" . $this->Table . "`";
            $stm = $conn->prepare($requi);
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function select($id){
            $conn = $this->connection;
            $requi = "SELECT * FROM `$this->Table` WHERE idLocal = :id";
            $stm = $conn->prepare($requi);
            $stm->execute(["id" => $id]);
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }











































        public function remove($id)
        {
            $conn = $this->connection;
            $requet = 'DELETE FROM ' . $this->Table . ' WHERE id=:id';
            $stm = $conn->prepare($requet);
            $stm->execute(["id" => $id]);
        }
        public function SelectOne($id)
        {
            $conn = $this->connection;
            $requet = 'SELECT * FROM ' . $this->Table . ' WHERE id=:id';
            $stm = $conn->prepare($requet);
            $stm->execute(["id" => $id]);
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return $result;
        }














        public function  getPlaceholders($arr)
        {
            return implode(",", array_map(function ($key) {
                return ":$key";
            }, array_keys($arr)));
        }
        public function  getval($arr)
        {
            return implode(",", array_map(function ($key) {
                return "$key";
            }, array_keys($arr)));
        }
    }

// $mm = new GlobalModel("Clients");
// $se = $mm->fetchByRef('halaGURIHZERUH');
// var_dump($se);

// $tt = new GlobalModel("Clients");
// $sel = $tt->insert($data);

// var_dump($sel);