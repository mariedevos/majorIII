<?php

require_once( __DIR__ . '/DAO.php');

class DataDAO extends DAO {

  // public function search($max=10, $name = '', $nationality = ''){
  //   $sql = "SELECT * FROM `acts` WHERE 1";

  //   if (!empty($name)) {
  //     $sql .= " AND `Name` LIKE :name";
  //   }
  //   if (!empty($nationality)) {
  //     $sql .= " AND `Nationality` = :nationality";
  //   }

  //   $sql .= " ORDER BY `id` DESC LIMIT :max";

  //   $stmt = $this->pdo->prepare($sql);
  //   if (!empty($name)) {
  //     $stmt->bindValue(':name','%'.$name.'%');
  //   }
  //   if (!empty($nationality)) {
  //     $stmt->bindValue(':nationality', $nationality);
  //   }
  //   $stmt->bindValue(':max', $max);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);



  // public function selectById($id){
  //   $sql = "SELECT * FROM `data` WHERE `Id` = :id";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':id', $id);
  //   $stmt->execute();
  //   return $stmt->fetch(PDO::FETCH_ASSOC);
  // }

  public function selectAll(){
    $sql = "SELECT * FROM `data` limit 4";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


}
