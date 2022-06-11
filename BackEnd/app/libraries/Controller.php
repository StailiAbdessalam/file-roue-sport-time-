<?php
class Controller
{
  public function model($model)
  {
    require_once '../app/models/' . $model . '.php';
    return new $model();
  }

  public function json($data)
  {
    header("content-type: application/json");
    echo json_encode($data);
  }
  public function isPostRequest(): bool
  {
    return $_SERVER["REQUEST_METHOD"] == "POST";
  }
  public function getBody()
  {
    if (!empty($_POST)) {
      return $_POST;
    }
    return json_decode(file_get_contents("php://input"), true);
  }
}
