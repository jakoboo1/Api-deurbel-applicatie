<?php
class DB
{
    public $host = 'adainforma.tk';
    public $name = 'projects_deurbel';
    public $username = 'deurbel';
    public $password = '23J7Ft%^-M';

    public function getConn()
    {
        try {
            $conn = new PDO(Sprintf('mysql:host=%s;dbname=%s;', $this->host, $this->name), "deurbel", "23J7Ft%^-M");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            echo "Connection error" . $e->getMessage();
            exit;
        }
    }
}
