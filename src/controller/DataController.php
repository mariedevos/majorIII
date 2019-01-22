<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/DataDAO.php';

class DataController extends Controller {

  private $DataDAO;

  function __construct() {
    $this->DataDAO = new DataDAO();
  }

  public function index() {
    $data = $this->DataDAO->selectAll();
    $this->set('data', $data);
  }

  public function programma() {
    $data = $this->DataDAO->selectAll();
    $this->set('data', $data);
  }

  public function detail() {
    $data = $this->DataDAO->selectAll();
    $this->set('data', $data);
  }
}


}
