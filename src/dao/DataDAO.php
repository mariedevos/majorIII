<?php

require_once( __DIR__ . '/DAO.php');

class DataDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `data`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


  public function joinTables(){
    $sql = "SELECT * FROM `data`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}
