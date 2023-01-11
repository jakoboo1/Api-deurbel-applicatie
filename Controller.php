<?php

require_once("DB.php");

class Controller
{
    private $conn;

    public function __construct()
    {
        $this->conn = (new DB())->getConn();
    }

    // Returns all Books
    public function lijst()
    {
        $query = "SELECT * FROM bezoeken limit 10";
        $stm = $this->conn->prepare($query);
        
        if ($stm->execute()) {
            if($stm->rowCount() > 0) {
                echo json_encode(array('success ' => true, 'data' => $stm->fetchAll(PDO::FETCH_ASSOC)));
            } else {
                echo json_encode(array('success' => false, 'message' => 'Er ging iets mis!'));
            }
        } else
            return false;
    }
    
}
