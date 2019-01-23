<?php

require_once( __DIR__ . '/DAO.php');

class ActDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `acts`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllLimit(){
    $sql = "SELECT * FROM `acts` ORDER BY RAND() LIMIT 4;";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }






  public function search($max=10, $titel = '', $type = ''){
    $sql = "SELECT * FROM `acts` WHERE 1";

    if (!empty($titel)) {
      $sql .= " AND `titel` LIKE :titel";
    }
    if (!empty($type)) {
      $sql .= " AND `type` = :type";
    }

    // $sql .= " ORDER BY `Overall` DESC LIMIT :max";

    $stmt = $this->pdo->prepare($sql);
    if (!empty($titel)) {
      $stmt->bindValue(':titel','%'.$titel.'%');
    }
    if (!empty($type)) {
      $stmt->bindValue(':type', $type);
    }
    $stmt->bindValue(':max', $max);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


}
