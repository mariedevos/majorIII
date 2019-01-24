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

  // public function programma() {
  //   // if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
  //   //   $acts = $this->ActDAO->search(25, $_GET['titel'], $_GET['type']);
  //   //   $this->set('title', "acts for ". $_GET['titel']);
  //   //   $this->set('titel',$_GET['titel']);
  //   //   $this->set('type',$_GET['type']);
  //   // }else{
  //   //   $acts = $this->ActDAO->search();
  //   //   $this->set('title', "Top 10");
  //   //   $this->set('titel','');
  //   //   $this->set('type','');
  //   // }

  //   $this->set('acts', $acts);
  //   $events = $this->DataDAO->selectById();
  //   $this->set('events', $events);

  // }

  public function programma() {
    $events = $this->DataDAO->selectById();
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
