<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/EventDAO.php';

class EventController extends Controller {

  private $todoDAO;

  function __construct() {
    $this->EventDAO = new EventDAO();
  }

  public function index() {
    if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
      $players = $this->EventDAO->search(25, $_GET['name'], $_GET['nationality']);
      $this->set('title', "Players for ". $_GET['name']);
      $this->set('name',$_GET['name']);
      $this->set('nationality',$_GET['nationality']);
    }else{
      $players = $this->EventDAO->search();
      $this->set('title', "Top 10");
      $this->set('name','');
      $this->set('nationality','');
    }

    $this->set('players', $players);

    $this->set('countries', $this->EventDAO->selectAllCountries());
    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      header('Content-Type: application/json');
      echo json_encode($players);
      exit();
    }
  }
/*
  private function handleSearchPlayer() {

    if (!$searchPlayersResult) {
      $errors = "No players found";
      $this->set('errors', $errors);
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'error',
          'errors' => $errors
        ));
        exit();
      }else{
        return $errors;
      }
      $_SESSION['error'] = $errors;
    } else {
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'ok',
          'todo' => $searchPlayersResult
        ));
        exit();
      }else{
        return searchPlayersResult;
      }
      $_SESSION['info'] = count($searchPlayersResult). " players found";
      header('Location: index.php');
      exit();
    }
  }*/

}
