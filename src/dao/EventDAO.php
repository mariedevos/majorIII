<?php

require_once( __DIR__ . '/DAO.php');

class EventDAO extends DAO {

  public function search($max=10, $name = '', $nationality = ''){
    $sql = "SELECT * FROM `players` WHERE 1";

    if (!empty($name)) {
      $sql .= " AND `Name` LIKE :name";
    }
    if (!empty($nationality)) {
      $sql .= " AND `Nationality` = :nationality";
    }

    $sql .= " ORDER BY `Overall` DESC LIMIT :max";

    $stmt = $this->pdo->prepare($sql);
    if (!empty($name)) {
      $stmt->bindValue(':name','%'.$name.'%');
    }
    if (!empty($nationality)) {
      $stmt->bindValue(':nationality', $nationality);
    }
    $stmt->bindValue(':max', $max);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

  // public function search($max=10, $name = '', $nationality = ''){
  //   // $sql = "SELECT * FROM `players` WHERE `Name` LIKE :name ORDER BY `Overall` DESC LIMIT :max";

  //   $sql = "SELECT * FROM `players` WHERE 1";
  //   // where 1 = 3 waar wel where nodig is en 1 scenario waar geen where nodig is

  //   if(!empty($name)){
  //     $sql .= " AND `Name`LIKE :name";
  //   }
  //   if (!empty($nationality)){
  //     $sql .= " AND `Nationality` = :nationality";
  //   }

  //   $stmt = $this->pdo->prepare($sql);
  //   // $stmt->bindValue(':name','%'.$name.'%');

  //   if(!empty($name)){
  //     $stmt;
  //   }
  //   if (!empty($nationality)){
  //     $sql .= " AND `Nationality` = :nationality";
  //   }

  //   $stmt->bindValue(':max', $max);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllCountries() {
    $sql = "SELECT DISTINCT `Nationality` FROM `players` ORDER BY `Nationality` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `players` WHERE `Id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }


}
