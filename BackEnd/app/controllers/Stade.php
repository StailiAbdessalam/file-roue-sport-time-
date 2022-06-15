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
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $data = (array)$data;
      $CliensModel->insert($data);
      echo json_encode("true");
    }
  }

  public function getAllStadebyId()
  {
    $CliensModel = $this->model('StadeModel');
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $data = (array)$data;
      $local = $CliensModel->getAllStadebyId($data);
      $this->json($local);
    }
  }
  public function getAllTime(){
    $Model= $this->model('StadeModel');
    if ($this->isPostRequest()) {
      $data = $this->getBody();

      $local = $Model->getAllTime($data);
      $local = (array)$local;
      $this->json($local);
    }
  }  
  public function getallReservation(){
    $Model= $this->model('StadeModel');
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $local = $Model->getallReservation($data);
      $local = (array)$local;
      $this->json($local);
    }
  }
}