<!-- <?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/DataDAO.php';

class DataController extends Controller {

  private $DataDAO;

  function __construct() {
    $this->DataDAO = new DataDAO();
  }

//   public function index() {
//     $data = $this->DataDAO->selectById($id);
//     exit();
//     $this->set('data', $data);
// }

  public function programma() {
    $data = $this->DataDAO->selectById($id);
    $this->set('data', $data);
  }

  // public function detail() {
  //   if(empty($_GET['id']) || !$events = $this->DataDAO->selectById($_GET['id'])){
  //     $_SESSION['error']= 'dit product bestaat niet';
  //     header('Location:index.php');
  //     exit();
  //   }
  //   $this->set('events', $events);
  // }

}
