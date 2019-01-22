<?php

require_once( __DIR__ . '/DAO.php');

class ActDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `acts`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


}
