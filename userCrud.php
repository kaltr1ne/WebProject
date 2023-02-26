<?php
if (!file_exists('dbConnect.php')) {
    require_once('../dbConnect.php');
  } else {
    require_once('dbConnect.php');
  }

if (!isset($_SESSION)) {
    session_start();
}
class userCrud extends dbConnect{
    private $userID;
    private $emri;
    private $mbiemri;
    private $username;
    private $email;
    private $password;
    private $aksesi;
    private $dbConnect;

    public function __construct($userID = '', $emri = '', $mbiemri = '', $username = '', $email = '', $password = '', $aksesi = '')
    {
        $this->userID = $userID;
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->aksesi = $aksesi;

        $this->dbConnect = $this->connDB();
    }

    public function getUserID(){
        return $this->userID;
    }

    public function setUserID($userID){
        $this->userID = $userID;
    }

    public function getEmri(){
        return $this->emri;
    }

    public function setEmri($emri){
        $this->emri = $emri;
    }

    public function getMbiemri(){
        return $this->mbiemri;
    }

    public function setMbiemri($mbiemri){
        $this->mbiemri = $mbiemri;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getAksesi(){
        return $this->aksesi;
    }

    public function setAksesi($aksesi){
        $this->aksesi = $aksesi;
    }

    
    public function shtoUser()
    {
        try {
            $sql = "INSERT INTO `user`(`emri`, `email`, `username`, `password`) VALUES (?,?,?,?)";
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute([$this->emri, $this->email, $this->username, $this->password]);

            $_SESSION['regMeSukses'] = true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function idKlientiNeRegjistrim()
    {
        try {
            $sql = 'SELECT userID from user ORDER BY userID DESC LIMIT 1';
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute();

            return $stm->fetch();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getUserByUsername($username) {
        try {
            $sql = 'SELECT * FROM `user` WHERE `username` = ?';
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute([$username]);
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getUserByEmail($email) {
        try {
            $sql = 'SELECT * FROM `user` WHERE `email` = ?';
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute([$email]);
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    // public function shtoAdresen()
    // {
    //     try {
    //         $sql = "INSERT INTO `tedhenatuser`(`userID`) VALUES (?)";
    //         $stm = $this->dbConnect->prepare($sql);
    //         $stm->execute([$this->userID]);
    //     } catch (Exception $e) {
    //         return $e->getMessage();
    //     }
    // }

    public function kontrolloUser()
    {
        try {
            $sql = 'SELECT * from user WHERE email = ?';
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute([$this->email]);

            return $stm->fetch();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    // public function kontrolloUser() {
    //     try {
    //         $sql = 'SELECT * FROM user WHERE email = ? OR username = ?';
    //         $stm = $this->dbConnect->prepare($sql);
    //         $stm->execute([$this->email, $this->username]);
    //         $user = $stm->fetch();
    
    //         if ($user !== false) {
    //             // User already exists
    //             return true;
    //         } else {
    //             // User does not exist
    //             return false;
    //         }
    //     } catch (Exception $e) {
    //         return $e->getMessage();
    //     }
    // }
    

    public function kontrolloLlogarin()
    {
        try {
            $sql = 'SELECT * from user WHERE username = ? and password = ?';
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute([$this->username, $this->password]);

            return $stm->fetch();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function shfaqSipasID()
    {
        try {
            $sql = 'SELECT * from user u INNER JOIN userData d ON u.userID = d.userID WHERE u.userID = ?';
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute([$this->userID]);

            return $stm->fetch();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function shfaqTeGjithePerdoruesit()
    {
        try {
            $sql = 'SELECT * from user';
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute();

            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    


}

?>