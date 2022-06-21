<?php
class Controller
{
  // function to get model
  public function model($model)
  {
    require_once '../app/models/' . $model . '.php';
    return new $model();
  }

  // function  to parce json
  public function json($data)
  {
    header("content-type: application/json");
    echo json_encode($data);
  }
  // function to check if the request is a post request
  public function isPostRequest(): bool
  {
    return $_SERVER["REQUEST_METHOD"] == "POST";
  }

  // function to get body of request
  public function getBody()
  {
    if (!empty($_POST)) {
      return $_POST;
    }
    return json_decode(file_get_contents("php://input"), true);
  }
}
