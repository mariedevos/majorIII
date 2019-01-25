<?php

require_once( __DIR__ . '/DAO.php');

class DataDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `data` INNER JOIN `acts` ON `acts_id` = `id`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // public function selectById($id){
  //   $sql = "SELECT * FROM `data` INNER JOIN `acts` ON `acts_id` = `id`";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':id', $id);
  //   $stmt->execute();
  //   return $stmt->fetch(PDO::FETCH_ASSOC);
  // }


  public function selectById($id){
    $sql = "SELECT * FROM `acts` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectAllByFilters($data){
    $sql = "SELECT `acts`.*, `data`.* FROM `data` INNER JOIN `acts` ON `acts_id` = `id`  WHERE 1";
    if (!empty ($data ['dag'])) {
      $sql .= " AND data.dag LIKE :dag";
    }
    if(!empty($data['type'])){
      $sql .= " AND acts.type LIKE :type";
    }

    $stmt = $this->pdo->prepare($sql);
    if (!empty($data['dag'])){
      $stmt->bindValue(':dag', $data['dag']);
    }
    if (!empty($data['type'])){
      $stmt->bindValue(':type', $data['type']);
    }
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $resultsGroups = array();
    foreach($results as $result){
      if(!isset($resultsGroups[$result['id']]))  $resultsGroups[$result['id']] = array();
      $resultsGroups[$result['id']] = $result;
      // $resultsGroups[$result['id']] = $result;
    }

    return $resultsGroups;
  }

  // public function selectById(){
  //   $sql = "SELECT * FROM `data` INNER JOIN `acts` ON `acts_id` = `id`";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }

  public function selectDay(){
    $sql = "SELECT * FROM `data` WHERE `dag`";
  }

  public function groupByType(){
    $sql = "SELECT * FROM `data` GROUP BY `type`";
  }

  // public function selectById($id){
  //   $sql = "SELECT * FROM `data` INNER JOIN `acts` ON `acts_id` = `id` WHERE `acts_id` = :id";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':id', $id);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }
}
