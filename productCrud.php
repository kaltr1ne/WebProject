<?php
if (!file_exists('dbConnect.php')) {
    require_once('../dbConnect.php');
  } else {
    require_once('dbConnect.php');
  }

if (!isset($_SESSION)) {
    session_start();
}

class productCrud extends dbConnect{
    private $products_ID;
    private $title;
    private $image;
    private $price;
    private $description;
    private $dbConnect;

    public function __construct($products_ID = '', $title = '', $image = '', $price = '', $description = ''){
        $this->products_ID = $products_ID;
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->description = $description;

        $this->dbConnect = $this->connDB();
    }

    public function getProducts_ID(){
        return $this->products_ID;
    }

    public function setProducts_ID($products_ID){
        $this->products_ID = $products_ID;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function shtoProduktin()
    {
        try {
            $this->barteFotonNeFolder();

            $this->setTitle($_SESSION['title']);
            $this->setPrice($_SESSION['price']);
            $this->setImage($_SESSION['image']);

            $sql = "INSERT INTO `shop`(`title`, `image`, `price`, `description` ) VALUES (?,?,?,?)";
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute([$this->title, $this->image, $this->price, $this->description]);

            $_SESSION['mesazhiMeSukses'] = true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }



    public function shfaqTeGjithaProduktet()
    {
        try {
            $sql = "SELECT * FROM `shop` ORDER BY `products_ID` DESC ";
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute();

            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function shfaq20ProduktetEFundit()
    {
        try {
            $sql = "SELECT * FROM (SELECT * FROM `shop` ORDER BY `products_ID` DESC LIMIT 20) AS produktetEFundit ORDER BY produktetEFundit.products_ID DESC";
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute();

            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function shfaqProduktinSipasID()
    {
        try {
            $sql = "SELECT * FROM shop sh WHERE sh.products_ID = ?";
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute([$this->products_ID]);

            return $stm->fetch();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function fshijProduktinSipasID()
    {
        try {
            $produkti = $this->shfaqProduktinSipasID();
            unlink('../img/' . $produkti['image']);

            $sql = "DELETE FROM shop WHERE products_ID = ?";
            $stm = $this->dbConnect->prepare($sql);
            $stm->execute([$this->products_ID]);

            $_SESSION['mesazhiFshirjesMeSukses'] = true;
            echo '<script>document.location="../admin/product.php"</script>';
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function editoProduktin($kaFoto)
    {
        try {
            if ($kaFoto == false) {
                $this->setProducts_ID($_SESSION['products_ID']);
                $this->setTitle($_SESSION['title']);
                $this->setPrice($_SESSION['price']);
                $this->setDescription($_SESSION['description']);

                $sql = "UPDATE `shop` SET `title`=?,`price`=?,`description`=?  WHERE products_ID = ?";
                $stm = $this->dbConnect->prepare($sql);
                $stm->execute([$this->title, $this->price, $this->description ,$this->products_ID]);
            } else {
                $shop = $this->shfaqProduktinSipasID();
                unlink('../img/' . $shop['image']);

                $this->barteFotonNeFolder();
                
                $this->setProducts_ID($_SESSION['products_ID']);
                $this->setTitle($_SESSION['title']);
                $this->setPrice($_SESSION['price']);
                $this->setDescription($_SESSION['description']);

                $sql = "UPDATE `shop` SET `title`=?,`price`=?,`description`=?  WHERE products_ID = ?";
                $stm = $this->dbConnect->prepare($sql);
                $stm->execute([$this->title, $this->price, $this->description ,$this->products_ID]);
            }

            $_SESSION['mesazhiMeSukses'] = true;
            echo '<script>document.location="../admin/product.php"</script>';
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function barteFotonNeFolder()
    {
        try {
            $image = $_SESSION['image'];
            $title = $_SESSION['title'];

            $fileExt = explode('.', $title);
            $fileActualExt = strtolower(end($fileExt));

            $teLejuara = array('jpg', 'jpeg', 'png', 'svg', 'webp');

            // if (in_array($fileActualExt, $teLejuara)) {
            //     if ($errorFoto === 0) {
            //         $_SESSION['emriUnikFotos'] = uniqid('', true) . "." . $fileActualExt;
            //         $destinacioniFotos = '../../img/products/' . $_SESSION['emriUnikFotos'];
            //         move_uploaded_file($emeriTempIFotes, $destinacioniFotos);

            //     } else {
            //         $_SESSION['problemNeBartje'] = true;
            //     }
            // } else {
            //     $_SESSION['fileNukSuportohet'] = true;
            // }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


public function numriTotalIProdukteve()
{
    try {
        $sql = "SELECT COUNT(*) as tot FROM `shop`";
        $stm = $this->dbConnect->prepare($sql);
        $stm->execute();

        return $stm->fetch();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
}


?>