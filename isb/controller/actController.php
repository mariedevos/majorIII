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
    $this->set('acts', $acts);
  }

  public function programma() {
    $data = array(
      'dag'=> (!empty($_GET['dag'])) ? $_GET['dag'] : '',
      'type'=> (!empty($_GET['type'])) ? $_GET['type'] : '',
    );

    $events=$this->DataDAO->selectAllByFilters($data);

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      header('Content-Type: application/json');
      echo json_encode($events);
      exit();
    }
    $this->set('events', $events);
    $times = $this->ActDAO->selectTimes();
    $this->set('times', $times);
  }

  public function detail() {
    if(empty($_GET['id']) || !$events = $this->DataDAO->selectById($_GET['id'])){
      $_SESSION['error']= 'dit product bestaat niet';
      header('Location:index.php');
      exit();
    }
    if(!empty($_GET['id'])){
      $detailAct = $this->DataDAO->selectById($_GET['id']);
    }
    $this->set('detailAct', $detailAct);

    if(empty($_GET['id']) || !$events = $this->DataDAO->selectByData($_GET['id'])){
      $_SESSION['error']= 'dit product bestaat niet';
      header('Location:index.php');
      exit();
    }
    if(!empty($_GET['id'])){
      $detailActData = $this->DataDAO->selectByData($_GET['id']);
    }
    $this->set('detailActData', $detailActData);
  }
}
