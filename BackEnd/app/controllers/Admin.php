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
    public $id;
    public $valide = false;
    public function __construct()
    {
    }
    public function index()
    {
        $admin = $this->model('AdminModel');
        // users si la liste des user in database
        $admins = $admin->selectAll();
        // var_dump($admins);
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $json = file_get_contents('php://input');
            $data = json_decode($json);
            foreach ($admins as $admin) {
                if ($admin['Reference_unique'] == $data) {
                    $this->valide = true;
                    break;
                } else {
                    $this->valide = false;
                }
            }
            echo json_encode($this->valide);
        }
    }
    public function DELETEUSER()
    {
        if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
            $this->id = $_GET['id'];
            $admin = $this->model('AdminModel');
            $admin->remove($this->id);
            // echo json_encode($id);
        }
    }
    public function DELETERDV()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $admin = $this->model('UserModel');
            $admin->remove($_GET['id']);
        }
    }



    public function RDVALL()
    {
        $admin = $this->model('RDVModel');
        $admins = $admin->selectAll();
        echo json_encode($admins);
    }
    public function getAllrdv()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $admin = $this->model('AdminModel');
            $admins = $admin->selectAllRdv();
            echo json_encode($admins);
        }
    }
    public function UserAll()
    {
        $admin = $this->model('UserModel');
        $admins = $admin->selectAll();
        echo json_encode($admins);
    }
    public function getOneUser()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
            $admin = $this->model('AdminModel');
            $data = $admin->SelectOneUser($id);
            echo json_encode($data);
        }
    }
    public function updateUser()
    {
      if ($_SERVER["REQUEST_METHOD"] === "PUT") {
        $UpdateUser = $this->model('AdminModel');
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        $Updatet = $UpdateUser->updateUser($data);
        echo json_encode($Updatet);
        // if ($created) {
        //   echo json_encode($created);
        // }
      }
    }
}
