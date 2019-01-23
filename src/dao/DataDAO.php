<?php

require_once( __DIR__ . '/DAO.php');

class DataDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `data`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `data` INNER JOIN `acts` ON `acts_id` = `id` WHERE `acts_id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // public function selectById($id){
  //   $sql = "SELECT * FROM `data` INNER JOIN `acts` ON `acts_id` = `id` WHERE `acts_id` = :id";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':id', $id);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }

}
