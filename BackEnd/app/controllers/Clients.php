<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:*');
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}
if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") return true;

class Clients extends Controller
{
  // public $valide = "false";
  // public function __construct()
  // {
  // }

  // function de singup
  public function index()
  {
    $CliensModel = $this->model('ClientsModel');
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $Cliens = $CliensModel->fetchByRef($data->Email);
      $pass = $data->ID;
      $hash = $Cliens['IdUnique'];
      if (password_verify($pass, $hash)) {
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

  // function de select all client
  public function selectAll()
  {
    $CliensModel = $this->model('ClientsModel');
    $Cliens = $CliensModel->selectAll();
    $this->json($Cliens);
  }
  // function forget password
  public function forgot()
  {
    $CliensModel = $this->model('ClientsModel');
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $Cliens = $CliensModel->fetchByMail($data->email);
      if ($Cliens['Email'] == $data->email) {
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

  // function register 
  public function register()
  {
    try {
      //code...
      $CreateAcc = $this->model('ClientsModel');
      if ($this->isPostRequest()) {
        $data = $this->getBody();
        $data->IdUnique = password_hash(($data->IdUnique), PASSWORD_BCRYPT);
        $data = (array)$data;
        $created = $CreateAcc->insert($data);
        $this->json($data);
      }
    } catch (\Throwable $e) {
      //throw $th;
      if ($e->errorInfo[1] == 1062) {
        $duplicateKeys = array();
        foreach ($e->errorInfo as $key => $value) {
          if ($key > 1) {
            preg_match("/key '(\w+)'/", $value, $matches);
            $duplicateKeys[] = $matches[1];
          }
        }
        echo json_encode(array("message" => "Product already exists", "keys" => $duplicateKeys, "status" => 400));
        return;
      }
    }
  }

  // function get one cliet by id
  public function getOne()
  {
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $CliensModel = $this->model('ClientsModel');
      $Cliens = $CliensModel->SelectOne($data->id);
      $this->json($Cliens);
    }
  }
 
}
