<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:*');
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}
if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") return true;
class Reservation extends Controller
{
    public function __construct()
    {
    }
    public function AddReservation()
    {
        $ReservationModel = $this->model('ReservationModel');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $json = file_get_contents('php://input');
            $data = json_decode($json);
            $data = $data->Reservation;
            $data = (array)$data;
            $created = $ReservationModel->insert($data);
            echo json_encode($created);
        }
    }
    public function GetReservation()
    {
        $ReservationModel = $this->model('ReservationModel');
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $data = $ReservationModel->getAllRESERVATION();
            echo json_encode($data);
        }
    }
    public function selectOneReservation(){
        $ReservationModel = $this->model('ReservationModel');
         if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $data = $ReservationModel->selectOneReservation();
            echo json_encode($data);
        }
    }
}
