<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ActDAO.php';

class ActController extends Controller {

  private $ActDAO;

  function __construct() {
    $this->ActDAO = new ActDAO();
  }

  public function index() {
    $acts = $this->ActDAO->selectAll();
    $this->set('acts', $acts);
  }

  public function programma() {
    $acts = $this->ActDAO->selectAll();
    $this->set('acts', $acts);
  }

  public function detail() {
    $acts = $this->ActDAO->selectAll();
    $this->set('acts', $acts);
  }
}
