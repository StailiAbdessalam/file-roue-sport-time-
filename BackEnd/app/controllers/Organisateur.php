<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:*');
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}
if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") return true;
class Organisateur extends Controller
{
  public $valide = "false";
  public function __construct()
  {
  }
  public function index()
  {
    $CliensModel = $this->model('OrganisateurModel');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json);
      $Cliens = $CliensModel->fetchByRef($data->ID);
      if ($Cliens['IdUnique'] == $data->ID) {
        $data = [
          "data" => $Cliens,
          "status" => "information correct",
        ];
        echo json_encode($data);
      } else {
        echo json_encode("information incorrect");
      }
    }
  }

  public function register()
  {
    $CreateAcc = $this->model('OrganisateurModel');
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $json = file_get_contents('php://input');
      $data = json_decode($json);
      $data = (array)$data;
      $data['IdUnique'] = 'OR-' . uniqid();
      $created = $CreateAcc->insert($data);
      echo json_encode($data);
    }
  }

  public function insertLocal()
  {
    $CreateAcc = $this->model('OrganisateurModel');
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $json = file_get_contents('php://input');
      $data = json_decode($json);
      $data = (array)$data;
      $created = $CreateAcc->insertLocal($data);
      echo json_encode($created);
    }
  }


  public function updatesuspended()
  {
    $CliensModel = $this->model('OrganisateurModel');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json);
      $CliensModel->updatesuspended($data);
      echo json_encode("true");
    }
  }

  public function SelectDemande()
  {
    $CliensModel = $this->model('OrganisateurModel');
    $Cliens = $CliensModel->selectDemandeOrg();
    echo json_encode($Cliens);
  }

  public function DeleteDemande()
  {
    $CliensModel = $this->model('OrganisateurModel');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json);
      $CliensModel->DeleteDemande($data);
      echo json_encode("true");
    }
  }

  public function selectOrg()
  {
    $CliensModel = $this->model('OrganisateurModel');
    $Cliens = $CliensModel->selectOrg();
    echo json_encode($Cliens);
  }

  public function selectArchive()
  {
    $CliensModel = $this->model('OrganisateurModel');
    $Cliens = $CliensModel->selectArchive();
    echo json_encode($Cliens);
  }
  public function getOne()
  {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $json = file_get_contents('php://input');
      $data = json_decode($json);
      $CliensModel = $this->model('OrganisateurModel');
      $Cliens = $CliensModel->getOne($data->id);
      echo json_encode($Cliens);
    }
  }

  public function updareprofile()
  {
    $CliensModel = $this->model('OrganisateurModel');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json);
      $Org = [
        "FirstName" => $data->FirstName,
        "LastName" => $data->LastName,
        "Email" => $data->Email,
        "Phone" => $data->Phone,
        "business_name" => $data->business_name,
      ];
      $local = [
        "Address" => $data->Address,
        "Ville" => $data->Ville,
        "About" => $data->About,
      ];
      $CliensModel->updareprofile($Org, $local, $data->idOrganisateur, $data->id);
      echo json_encode("true");
    }
  }

  public function selectAllLocal()
  {
    $CliensModel = $this->model('OrganisateurModel');
    $Cliens = $CliensModel->selectAllLocal();
    echo json_encode($Cliens);
  }

  public function selectOneLocal()
  {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $json = file_get_contents('php://input');
      $data = json_decode($json);
      $CliensModel = $this->model('OrganisateurModel');
      $Cliens = $CliensModel->selectOneLocal($data->id);
      echo json_encode($Cliens);
    }
  }

  




































  public function selectAll()
  {
    $CliensModel = $this->model('ClientsModel');
    $Cliens = $CliensModel->selectAll();
    echo json_encode($Cliens);
  }

  public function getAllRDV()
  {
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
      $RDV = $this->model('RDVModel');
      $RDVs = $RDV->selectAll($_GET['id']);
      echo json_encode($RDVs);
    }
  }
  public function addAppointment()
  {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $addApp = $this->model('RDVModel');
      $json = file_get_contents('php://input');
      $data = json_decode($json);
      $data = array_values((array)$data);
      $created = $addApp->insertRDV($data);
      echo json_encode($created);
    }
  }
  public function remove()
  {
    if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
      $deleteRDV = $this->model('RDVModel');
      $deleteRDV->deleteRDV($_GET['id']);
    }
  }
  public function updateAppointment()
  {
    if ($_SERVER["REQUEST_METHOD"] === "PUT") {
      $updateRDV = $this->model('RDVModel');
      $json = file_get_contents('php://input');
      $data = json_decode($json);
      $data = array_values((array)$data);

      $created = $updateRDV->updateRDV($data, $_GET['id']);
      echo json_encode($created);
    }
  }
  public function selectInDate()
  {
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
      $creneaux = $this->model('RDVModel');
      $creneau = $creneaux->slectcreneau($_GET['date']);
      $date = [];
      $date[0] = "10h à 10:30h";
      $date[1] = "11h à 11:30h";
      $date[2] = "14h à 14:30h";
      $date[3] = "15h à 15:30h";
      $date[4] = "16h à 16:30h";

      foreach ($creneau as $creneaux) {
        if ($creneaux['creneau'] == "10h à 10:30h") {
          unset($date[0]);
        }
        if ($creneaux['creneau'] == "11h à 11:30h") {
          unset($date[1]);
        }
        if ($creneaux['creneau'] == "14h à 14:30h") {
          unset($date[2]);
        }
        if ($creneaux['creneau'] == "15h à 15:30h") {
          unset($date[3]);
        }
        if ($creneaux['creneau'] == "16h à 16:30h") {
          unset($date[4]);
        }
      }
      echo json_encode($date);
    }
  }
}
