<?php
if (!file_exists('dbConnect.php')) {
    require_once('../dbConnect.php');
  } else {
    require_once('dbConnect.php');
  }

if (!isset($_SESSION)) {
    session_start();
}
class orderCrud extends dbConnect{
    private $porosiaID;
    private $products_ID;
    private $userID;
    private $emriKlientit;
    private $mbiemriKlientit;
    private $emailKlientit;
    private $dataPorosis;
    private $qmimiProd;
    private $sasiaPorositur;
    private $qmimiTotal;
    private $statusiPorosis;
    private $dbConn;

    public function __construct($porosiaID = '', $products_ID = '', $userID = '', $emriKlientit = '', $mbiemriKlientit = '', $emailKlientit = '', $dataPorosis = '', $qmimiProd = '', $sasiaPorositur = '', $qmimiTotal = '', $statusiPorosis = '',){
        $this->porosiaID = $porosiaID;
        $this->products_ID = $products_ID;
        $this->userID = $userID;
        $this->emriKlientit = $emriKlientit;
        $this->mbiemriKlientit = $mbiemriKlientit;
        $this->emailKlientit = $emailKlientit;
        $this->sasiaPorositur = $qmimiProd;
        $this->sasiaPorositur = $sasiaPorositur;
        $this->dataPorosis = $dataPorosis;
        $this->qmimiTotal = $qmimiTotal;
        $this->statusiPorosis = $statusiPorosis;

        $this->dbConn = $this->connDB();
    }



    public function getPorosiaID()
    {
        return $this->porosiaID;
    }

    public function setPorosiaID($porosiaID)
    {
        $this->porosiaID = $porosiaID;
    }

    public function getProducts_ID()
    {
        return $this->products_ID;
    }

    public function setProducts_ID($products_ID)
    {
        $this->products_ID = $products_ID;
    }

    public function getUserID()
    {
        return $this->userID;
    }

    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    public function getEmriKlientit()
    {
        return $this->emriKlientit;
    }

    public function setEmriKlientit($emriKlientit)
    {
        $this->emriKlientit = $emriKlientit;
    }

    public function getMbiemriKlientit()
    {
        return $this->mbiemriKlientit;
    }

    public function setMbiemriKlientit($mbiemriKlientit)
    {
        $this->mbiemriKlientit = $mbiemriKlientit;
    }

    public function getEmailKlientit()
    {
        return $this->emailKlientit;
    }

    public function setEmailKlientit($emailKlientit)
    {
        $this->emailKlientit = $emailKlientit;
    }
    
    public function getDataPorosis()
    {
        return $this->dataPorosis;
    }

    public function setDataPorosis($dataPorosis)
    {
        $this->dataPorosis = $dataPorosis;
    }

    public function getQmimiProd()
    {
        return $this->qmimiProd;
    }

    public function setQmimiProd($qmimiProd)
    {
        $this->qmimiProd = $qmimiProd;
    }
    public function getSasiaPorositur()
    {
        return $this->sasiaPorositur;
    }

    public function setSasiaPorositur($sasiaPorositur)
    {
        $this->sasiaPorositur = $sasiaPorositur;
    }

    public function getQmimiTotal()
    {
        return $this->qmimiTotal;
    }

    public function setQmimiTotal($qmimiTotal)
    {
        $this->qmimiTotal = $qmimiTotal;
    }

    public function getStatusiPorosis()
    {
        return $this->statusiPorosis;
    }

    public function setStatusiPorosis($statusiPorosis)
    {
        $this->statusiPorosis = $statusiPorosis;
    }

    public function shtoPorosin()
    {
        try {
            $sql = "INSERT INTO `orders`(`idKlienti`, `TotaliPorosis`) VALUES (?, ?)";
            $stm = $this->dbConn->prepare($sql);
            $stm->execute([$this->userID, $this->qmimiTotal]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }




}
?>