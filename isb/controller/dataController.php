<!-- <?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/DataDAO.php';

class DataController extends Controller {

  private $DataDAO;

  function __construct() {
    $this->DataDAO = new DataDAO();
  }

  public function programma() {
    $data = $this->DataDAO->selectById($id);
    $this->set('data', $data);
  }

}
