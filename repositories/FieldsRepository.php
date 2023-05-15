<?php
class FieldsRepository
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read_by_name($name)
    {
        $query = 'SELECT name, aria, bal, pH, gumus, azot, phosfor, kaliy FROM agrecology_fields WHERE name = ?';

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $name);

        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        return $data;
    }
}
