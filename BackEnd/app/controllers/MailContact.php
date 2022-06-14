<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}
if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") return true;

class MailContact extends Controller
{
    public $valide = "false";
    public function __construct()
    {
    }
    public function sendEmail()
    {
        if ($this->isPostRequest()) {
            $data = $this->getBody();
            $to  = 'sportimegoo@gmail.com';
            $subject = 'Contact Client';
            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=iso-8859-1';
            $headers[] = "To: Sport Time <sportimegoo@gmail.com>";
            $headers[] = "From: $data->email";
            mail($to, $subject, $data->sujet, implode("\r\n", $headers));
        }
    }
}
