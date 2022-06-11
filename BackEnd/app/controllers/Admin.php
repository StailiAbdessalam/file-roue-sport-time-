<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:*');
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}
if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") return true;
class Admin extends Controller
{
  public $valide = "false";
  public function __construct()
  {
  }
  public function index()
  {
    $CliensModel = $this->model('AdminModel');
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $Cliens = $CliensModel->fetchByRef($data->ID);
      if ($Cliens['IdUnique'] == $data->ID) {
        $data = [
          "data" => $Cliens,
          "status" => "information correct",
        ];
        $this->json($data);
      } else {
        echo json_encode("information incorrect");
      }
    }
  }
  public function register()
  {
    $CreateAcc = $this->model('AdminModel');
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $data = (array)$data;
      $data['IdUnique'] = 'CL-' . uniqid();
      $created = $CreateAcc->insert($data);
      $this->json($data);
    }
  }
  public function getAllRDV()
  {
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
      $RDV = $this->model('RDVModel');
      $RDVs = $RDV->selectAll($_GET['id']);
      $this->json($RDVs);
    }
  }
  public function getOne()
  {
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
      $select = $this->model('UserModel');
      $selected = $select->select($_GET['id']);
      $this->json($selected);
    }
  }
  public function addAppointment()
  {
    if ($this->isPostRequest()) {
      $addApp = $this->model('RDVModel');
      $data = $this->getBody();
      $data = array_values((array)$data);
      $created = $addApp->insertRDV($data);
      $this->json($created);
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
      $data = $this->getBody();
      $data = array_values((array)$data);

      $created = $updateRDV->updateRDV($data, $_GET['id']);
      $this->json($created);
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
      $this->json($date);
    }
  }
}
