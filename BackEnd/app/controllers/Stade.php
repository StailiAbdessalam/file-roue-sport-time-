<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:*');
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}
if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") return true;
class Stade extends Controller
{
  public $valide = "false";
  public function __construct()
  {
  }

  public function AddStade()
  {
    $CliensModel = $this->model('StadeModel');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json);
      $data = (array)$data;
      $CliensModel->insert($data);
      echo json_encode("true");
    }
  }

  public function getAllStadebyId()
  {
    $CliensModel = $this->model('StadeModel');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json);
      $data = (array)$data;
      $local = $CliensModel->getAllStadebyId($data);
      echo json_encode($local);
    }
  }
  public function getAllTime(){
    $Model= $this->model('StadeModel');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $json = file_get_contents('php://input');
      $data = json_decode($json);

      $local = $Model->getAllTime($data);
      echo json_encode($local);
    }
  }
}
