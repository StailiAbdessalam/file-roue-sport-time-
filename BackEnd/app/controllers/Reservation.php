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
    // function to add reservation
    public function AddReservation()
    {
        $ReservationModel = $this->model('ReservationModel');
        if ($this->isPostRequest()) {
            $data = $this->getBody();
            $data = $data->Reservation;
            $data = (array)$data;
            $created = $ReservationModel->insert($data);
            $this->json($created);
        }
    }
    // function to get All reservation
    public function GetReservation()
    {
        $ReservationModel = $this->model('ReservationModel');
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $data = $ReservationModel->getAllRESERVATION();
            $this->json($data);
        }
    }
    // function to get reservation by id
    public function selectOneReservation(){
        $ReservationModel = $this->model('ReservationModel');
         if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $data = $ReservationModel->selectOneReservation();
            $this->json($data);
        }
    }
}
