<?php

/**
 * database connectie
 */
class Database
{
  private $conn;
  function __construct($server, $gebruikersnaam, $wachtwoord, $databasenaam)
  {

    $this->conn = mysqli_connect($server, $gebruikersnaam, $wachtwoord, $databasenaam);
  }

  private function Myquery($sql){
    $resultaat = mysqli_query($this->conn, $sql);
    return $resultaat;
  }

  public function Select($tabel, $kolommen, $where=""){
    // $kolommen = `kolom-naam1`, `kolom-naam2`
    $sql = "SELECT ".$kolommen." FROM `".$tabel."`";
    if($where!=""){$sql=$sql.$where;}
    return $this->Myquery($sql);
  }
  public function Insert($tabel,$kolommen, $values){
    // $kolommen = `kolom-naam1`, `kolom-naam2`
    // $values = `value1`, `value2`
    $sql = "INSERT INTO `".$tabel."`(".$kolommen.") VALUES(".$values.")";
    return $this->Myquery($sql);
  }
}
?>
