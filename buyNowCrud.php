<?php
if (!file_exists('dbConnect.php')) {
    require_once('../dbConnect.php');
  } else {
    require_once('dbConnect.php');
  }

if (!isset($_SESSION)) {
    session_start();
}

class buyNowCrud extends dbConnect
{
    private $name;
    private $surname;
    private $username;
    private $email;
    private $contactNumber;
    private $address;
    private $emriProduktit;
    private $sasia;  
    private $ngjyra;
    private $coupon;
    private $dbConnect;

    public function __construct($name = '', $surname = '', $username = '', $email = '', $contactNumber = '', $address= '', $emriProduktit = '', $sasia = '', $ngjyra= '', $coupon= '')
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
        $this->email = $email;
        $this->contactNumber = $contactNumber;
        $this->address = $address;
        $this->emriProduktit = $emriProduktit;
        $this->sasia = $sasia;
        $this->ngjyra = $ngjyra;
        $this->coupon = $coupon;
        
       $this->dbConnect = $this->connDB();
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function setSurname($surname){
        $this->surname = $surname;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        $this->username = $username;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;
    }
    public function getAddress(){
        return $this->address;
    }
    public function setAddress($address){
        $this->address = $address;
    }

    public function getEmriProduktit(){
        return $this->emriProduktit;
    }
    public function setEmriProduktit($emriProduktit){
        $this->emriProduktit = $emriProduktit;
    }

    public function getSasia(){
        return $this->sasia;
    }
    public function setSasia($sasia){
        $this->sasia = $sasia;
    }

    public function getNgjyra(){
        return $this->ngjyra;
    }
    public function setNgjyra($ngjyra){
        $this->ngjyra = $ngjyra;
    }

    public function getCoupon(){
        return $this->coupon;
    }
    public function setCoupon($coupon){
        $this->coupon = $coupon;
    }

    public function addOrder()
    {
        try {
            $sql = "INSERT INTO `orders`(`name`, `surname`, `email`,`username`,`contactNumber`,`address`,`emriProduktit`,`sasia`,`ngjyra`, `coupon`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute([$this->name, $this->surname, $this->email, $this->username, $this->contactNumber, $this->address, $this->emriProduktit, $this->sasia, $this->ngjyra, $this->coupon]);
            $_SESSION['mesazhiMeSukses'] = true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function showOrders()
    {
        try {
            $sql = "SELECT * FROM orders";
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute();

            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}


?>