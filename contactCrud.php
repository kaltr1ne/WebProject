<?php
if (!file_exists('dbConnect.php')) {
    require_once('../dbConnect.php');
  } else {
    require_once('dbConnect.php');
  }

if (!isset($_SESSION)) {
    session_start();
}

class contactCrud extends dbConnect
{
    private $messageID;
    private $emri;
    private $email;
    
    private $reason;
    private $message;
    private $statusi;
    private $dbConnect;

    public function __construct($messageID = '', $emri = '', $email = '', $message = '', $reason = '', $statusi= '')
    {
        $this->messageID = $messageID;
        $this->emri = $emri;
        $this->email = $email;
        $this->message = $message;
        $this->reason = $reason;
        $this->statusi = $statusi;

        $this->dbConnect = $this->connDB();
    }

    public function getEmri(){
        return $this->emri;
    }

    public function setEmri($emri){
        $this->emri = $emri;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getMessage(){
        return $this->message;
    }

    public function setMessage($message){
        $this->message = $message;
    }
    public function getReason()
    {
        return $this->reason;
    }

    public function setReason($reason)
    {
        $this->reason = $reason;
    }
    public function getMessageID()
    {
        return $this->messageID;
    }

    public function setMessageID($messageID)
    {
        $this->messageID = $messageID;
    }
    public function getStatusi(){
        return $this->statusi;
    }
    public function setStatusi($statusi){
        $this->statusi = $statusi;
    }

    public function insertMessage(){
        try {
            $sql = "INSERT INTO `contact`(`emri`, `email`, `message`) VALUES (?,?,?)";
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute([$this->emri, $this->email, $this->message]);

            $_SESSION['mesazhiMeSukses'] = true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function shfaqMesazhet()
    {
        try {
            $sql = "SELECT * FROM contact";
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute();

            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function konfirmoMesazhin()
    {
        try {
            $sql = "UPDATE contact set statusi = 'Mesazhi eshte Pranuar dhe eshte Pergjigjur ne email' where messageID = ?";
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute([$this->messageID]);

            $_SESSION['mezashiUKonfirmua'] = true;
            echo '<script>document.location="../admin/showMessage.php"</script>';
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}



?>