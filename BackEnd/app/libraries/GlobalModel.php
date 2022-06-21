 <?php
    require_once 'Connection.php';
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
        // function insert 
        public function insert($data)
        {
            try {
                $con = $this->connection;
                $requi = "INSERT INTO " . $this->Table . "(" . $this->getval($data) . ") VALUES (" . $this->getPlaceholders($data) . ") ";
                $stm = $con->prepare($requi);
                $result = $stm->execute($data);
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return $e;
            }
        }

        public function fetchByRef($Ref)
        {
            try {
                $conn = $this->connection;
                $requi = 'SELECT * FROM ' . $this->Table . ' WHERE email = :Ref';
                $stm = $conn->prepare($requi);
                $stm->execute(["Ref" => $Ref]);
                $result = $stm->fetch(PDO::FETCH_ASSOC);
                return $result;
            } catch (\Throwable $th) {
                return false;
            }
        }

        // select by email
        public function fetchByMail($email)
        {
            $conn = $this->connection;
            $requi = 'SELECT * FROM ' . $this->Table . ' WHERE Email = :email';
            $stm = $conn->prepare($requi);
            $stm->execute(["email" => $email]);
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        // update by suspended
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
        // select all les demandes
        public function selectDemandeOrg()
        {
            $conn = $this->connection;
            $requi = "SELECT *  FROM `organisateur` left join local on local.idOrganisateur = organisateur.id WHERE organisateur.suspended = -1";
            $stm = $conn->prepare($requi);
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        // Delete function
        public function Delete($id)
        {
            $conn = $this->connection;
            $requi = "DELETE FROM `$this->Table` WHERE id = :id";
            $stm = $conn->prepare($requi);
            $stm->execute(["id" => $id]);
            return $stm->fetch(PDO::FETCH_ASSOC);
        }

        // select all organiateur
        public function selectAllOrganisateur()
        {
            $conn = $this->connection;
            $requi = "SELECT *  FROM `organisateur` left join local on local.idOrganisateur = organisateur.id WHERE organisateur.suspended = 1";
            $stm = $conn->prepare($requi);
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        // select one local 
        public function selectOneLocal($id)
        {
            $conn = $this->connection;
            $requi = "SELECT *  FROM `organisateur` left join local on local.idOrganisateur = organisateur.id WHERE local.id = :id";
            $stm = $conn->prepare($requi);
            $stm->execute(["id" => $id]);
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        // select organisateur and local by suspended in join table
        public function selectArchive()
        {
            $conn = $this->connection;
            $requi = "SELECT *  FROM `organisateur` left join local on local.idOrganisateur = organisateur.id WHERE organisateur.suspended = 'X'";
            $stm = $conn->prepare($requi);
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        // get onne by id
        public function getOne($id)
        {
            $conn = $this->connection;
            $requi = "SELECT *  FROM `organisateur` left join local on local.idOrganisateur = organisateur.id WHERE organisateur.id = :id";
            $stm = $conn->prepare($requi);
            $stm->execute(["id" => $id]);
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        // update organisateur
        public function UpdateOrg($data, $id)
        {
            $conn = $this->connection;
            $requi = "UPDATE `organisateur` SET `FirstName`=:FirstName,`LastName`=:LastName,`Email`=:Email,`Phone`=:Phone, `business_name`=:business_name  WHERE id=:id";
            $stm = $conn->prepare($requi);
            $stm->execute(["FirstName" => $data["FirstName"], "LastName" => $data["LastName"], "Email" => $data["Email"], "Phone" => $data["Phone"], "business_name" => $data["business_name"], "id" => $id]);
            return $stm->fetch(PDO::FETCH_ASSOC);
        }
        // update local
        public function UpdateLocal($data, $id)
        {
            $conn = $this->connection;
            $requi = "UPDATE `local` SET `Address`=:Address,`Ville`=:Ville , `About`=:About WHERE id=:id";
            $stm = $conn->prepare($requi);
            $stm->execute(["Address" => $data["Address"], "Ville" => $data["Ville"], "About" => $data["About"], "id" => $id]);
            return $stm->fetch(PDO::FETCH_ASSOC);
        }
        // select all 
        public function selectAll()
        {
            $conn = $this->connection;
            $requi = "SELECT * FROM `" . $this->Table . "`";
            $stm = $conn->prepare($requi);
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        // select one by idLocal
        public function select($id)
        {
            $conn = $this->connection;
            $requi = "SELECT * FROM `$this->Table` WHERE idLocal = :id";
            $stm = $conn->prepare($requi);
            $stm->execute(["id" => $id]);
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        // select one by id 
        public function selectClients($id)
        {
            $conn = $this->connection;
            $requi = "SELECT * FROM `$this->Table` WHERE id = :id";
            $stm = $conn->prepare($requi);
            $stm->execute(["id" => $id]);
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        // select time disponible by date and local
        public function selectAllTime($dat)
        {
            $conn = $this->connection;
            $requi = "SELECT Time FROM `$this->Table`  WHERE Date=:daate && idStadieum = :id";
            $stm = $conn->prepare($requi);
            $stm->execute(["daate" => $dat->date, "id" => $dat->id]);
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        // select all reservation by date 
        public function selectAllResrbydate($dat)
        {
            $conn = $this->connection;
            $requi = "SELECT * FROM `$this->Table`  WHERE Date=:daate && idStadieum = :id";
            $stm = $conn->prepare($requi);
            $stm->execute(["daate" => $dat->date, "id" => $dat->id]);
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        // select one reservation limit 1
        public function selectOneReservation()
        {
            $conn = $this->connection;
            $requi = "SELECT * FROM `$this->Table` ORDER BY id DESC LIMIT 1";
            $stm = $conn->prepare($requi);
            $stm->execute();
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        // remove by id 
        public function remove($id)
        {
            $conn = $this->connection;
            $requet = 'DELETE FROM ' . $this->Table . ' WHERE id=:id';
            $stm = $conn->prepare($requet);
            $stm->execute(["id" => $id]);
        }
        // select one by id
        public function SelectOne($id)
        {
            $conn = $this->connection;
            $requet = 'SELECT * FROM ' . $this->Table . ' WHERE id=:id';
            $stm = $conn->prepare($requet);
            $stm->execute(["id" => $id]);
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        // function de placeholder pour les requetes
        public function  getPlaceholders($arr)
        {
            return implode(",", array_map(function ($key) {
                return ":$key";
            }, array_keys($arr)));
        }
        // funtcion values 
        public function  getval($arr)
        {
            return implode(",", array_map(function ($key) {
                return "$key";
            }, array_keys($arr)));
        }
    }
