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

  // public $valide = "false";
  public function __construct()
  {
  }
  // function de singup 
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
  // function de login
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
    // function de delete organisateur
  public function remove()
  {
    if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
      $deleteRDV = $this->model('RDVModel');
      $deleteRDV->deleteRDV($_GET['id']);
    }
  }
  // function de update organisateur
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

}
