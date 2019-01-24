<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ActDAO.php';
require_once __DIR__ . '/../dao/DataDAO.php';

class ActController extends Controller {

  private $ActDAO;
  private $DataDAO;

  function __construct() {
    $this->ActDAO = new ActDAO();
    $this->DataDAO = new DataDAO();
  }

  public function index() {
    $acts = $this->ActDAO->selectAllLimit();

// hier over je array lopen

    $this->set('acts', $acts);
  }

  public function programma() {
    // if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
    //   $events = $this->ActDAO->search($_GET['dag']);
    //   $this->set('dag',$_GET['dag']);
    // }else{
    //   $events = $this->ActDAO->search();
    //   $this->set('dag','');
    // }

    $this->filterSystem();

    // $events = $this->DataDAO->selectAll();

    // $this->set('events', $events);
  }

  public function filterSystem(){
    $data = array(
      'dag'=> (!empty($_GET['dag'])) ? $_GET['dag'] : '',
      'type'=> (!empty($_GET['type'])) ? $_GET['type'] : '',
    );

    $events=$this->DataDAO->selectAllByFilters($data);
    $this->set('events', $events);
  }


  // public function programma() {
  //   $events = $this->DataDAO->selectAll();
  //   // $events = $this->ActDAO->selectById($id);
  //   $this->set('events', $events);
  // }

  public function detail() {
    $acts = $this->ActDAO->selectAll();
    $this->set('acts', $acts);
  }
}
