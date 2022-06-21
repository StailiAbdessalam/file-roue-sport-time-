<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:*');
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}
if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") return true;
class Organisateur extends Controller
{
  public $valide = "false";
  public function __construct()
  {
  }

  public function index()
  {
    $CliensModel = $this->model('OrganisateurModel');
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
  // function de lauthentification
  public function register()
  {
    $CreateAcc = $this->model('OrganisateurModel');
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $data->IdUnique = password_hash(($data->IdUnique), PASSWORD_BCRYPT);
      $data = (array)$data;
      $created = $CreateAcc->insert($data);
      $this->json($data);
    }
  }
  // add local 
  public function insertLocal()
  {
    $CreateAcc = $this->model('OrganisateurModel');
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $data = (array)$data;
      $created = $CreateAcc->insertLocal($data);
      $this->json($created);
    }
  }

  // update type de organisation
  public function updatesuspended()
  {
    $CliensModel = $this->model('OrganisateurModel');
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $CliensModel->updatesuspended($data);
      echo json_encode("true");
    }
  }

  // function get all demande 
  public function SelectDemande()
  {
    $CliensModel = $this->model('OrganisateurModel');
    $Cliens = $CliensModel->selectDemandeOrg();
    $this->json($Cliens);
  }
  // function to delete demande 
  public function DeleteDemande()
  {
    $CliensModel = $this->model('OrganisateurModel');
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $CliensModel->DeleteDemande($data);
      echo json_encode("true");
    }
  }
  // get all organisateur 
  public function selectOrg()
  {
    $CliensModel = $this->model('OrganisateurModel');
    $Cliens = $CliensModel->selectOrg();
    $this->json($Cliens);
  }

  public function selectArchive()
  {
    $CliensModel = $this->model('OrganisateurModel');
    $Cliens = $CliensModel->selectArchive();
    $this->json($Cliens);
  }
  // select all organistauer archivier
  public function getOne()
  {
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $CliensModel = $this->model('OrganisateurModel');
      $Cliens = $CliensModel->getOne($data->id);
      $this->json($Cliens);
    }
  }
  // update profile de l'organisateur
  public function updareprofile()
  {
    $CliensModel = $this->model('OrganisateurModel');
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $Org = [
        "FirstName" => $data->FirstName,
        "LastName" => $data->LastName,
        "Email" => $data->Email,
        "Phone" => $data->Phone,
        "business_name" => $data->business_name,
      ];
      $local = [
        "Address" => $data->Address,
        "Ville" => $data->Ville,
        "About" => $data->About,
      ];
      $CliensModel->updareprofile($Org, $local, $data->idOrganisateur, $data->id);
      echo json_encode("true");
    }
  }
  // select all local 
  public function selectAllLocal()
  {
    $CliensModel = $this->model('OrganisateurModel');
    $Cliens = $CliensModel->selectAllLocal();
    $this->json($Cliens);
  }
  // select one local by id
  public function selectOneLocal()
  {
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      $CliensModel = $this->model('OrganisateurModel');
      $Cliens = $CliensModel->selectOneLocal($data->id);
      $this->json($Cliens);
    }
  }

  // send email de validation 
  public function sendEmailValidate()
  {
    if ($this->isPostRequest()) {
      $data = $this->getBody();
      echo "hezuofhouzhfuoze";
      $to = $data->Email;
      $subject = "Validation de votre compte";
      $message = "
    <html>
    <head>
    <title>Validation de votre compte</title>
    </head>
    <body>
    <p>Bonjour,</p>
    <p>Merci de cliquer sur le lien ci-dessous pour valider votre compte.</p>
    <p><a href='https://time-sport.vercel.app/Login'>Valider mon compte</a></p>
    <p>Cordialement,</p>
    <p>L'équipe</p>
    </body>
    </html>
    ";
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= 'From:Sportimegoo@gmail.Com';
      mail($to, $subject, $message, $headers);
      echo json_encode("true");
    }
  }

  // select all client 
  public function selectAll()
  {
    $CliensModel = $this->model('ClientsModel');
    $Cliens = $CliensModel->selectAll();
    $this->json($Cliens);
  }
}
