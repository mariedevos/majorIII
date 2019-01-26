<?php

require_once( __DIR__ . '/DAO.php');

class ActDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `acts`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


  // public function selectAllLimit(){
  //   $sql = "SELECT * FROM `acts`  ORDER BY RAND() LIMIT 4;";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);

  //   // $act = $stmt->fetchAll(PDO::FETCH_ASSOC)
  //   // ophaaldeData = data voor act_id ophalen
  //   // data toevoegen aan $act['data']=ophaaldeData
  //   // return act
  //   // return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }

  public function selectAllLimit(){
    $sql = "SELECT * FROM `data` INNER JOIN `acts` ON `acts_id` = `id` ORDER BY RAND() LIMIT 4";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectTimes(){
    $sql = "SELECT  * FROM `data`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }



  public function search($max=10, $dag = ''){
    $sql = "SELECT  * FROM `acts` WHERE 1";

    if (!empty($dag)) {
      $sql .= " AND `dag` LIKE :dag";
    }

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
