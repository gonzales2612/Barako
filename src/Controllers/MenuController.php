<?
namespace App\Controllers;

use App\Models\Menu;

class MenuController extends BaseController
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function showMenu()
    {
        $menuModel = new Menu($this->db);
        $menu_items = $menuModel->getAll(); 

        return $this->render('menu', ['menu_items' => $menu_items]);
    }

    public function list()
    {
        $menuModel = new Menu($this->db); // Pass the database connection
        header('Content-Type: application/json'); // Return JSON
        echo json_encode($menuModel->getAll()); // Output data as JSON
    }



    public function index()
    {
        // Fetch all menu items from the MenuModel
        $menuItems = $this->menuModel->getAllMenuItems();

        // Pass the menu items to the view and render it
        return $this->render('order', ['menuItems' => $menuItems]);
    }
}
