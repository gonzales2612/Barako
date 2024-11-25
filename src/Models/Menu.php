<?
namespace App\Models;

use PDO;

class Menu
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllMenu()
    {
        $sql = "SELECT * FROM menu_items";
        $statement = $this->db->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
}
