<?php
include_once("db.php");
/*
portfolio{
   projecten{
     id = int(3)
     Titel = varchar(15)
     Omschrijving = TEXT(255)
     Datum = Date
     Plaatje = BLOB
   }
}
*/
$db= new Database("localhost","root","","portfolio");
//$sql ="SELECT `Titel`,`Omschrijving`,`Datum`,`Plaatje` FROM `projecten`";
//$result=$db->Myquery($sql);
$resultaat=$db->Select("projecten", "`Titel`, `Omschrijving`, `Datum`, `Plaatje`");
?>
<background>
<div class="container">

<?php
$nr = 0; // variabele nr is 0
while( $fetch = mysqli_fetch_array($resultaat)){
if ($nr==0) {echo "<div class='row'>";} // als nr 0 is dan echo'd hij een row
?>

<head>
<link rel="stylesheet" href="css\style.css">
</head>
<br>
<div class="col-sm-4 d-flex animated fadeInUp">
    <div class="card h-100 border-dark ">
      <div class="card-body">
        <?php
          if ($fetch['Plaatje'] != "") {
          echo "<img class='card-img-top' src='data:image/jpeg;base64," . base64_encode($fetch['Plaatje']) . "' alt=''>";
          }
        ?>
      <h5 class="card-title"><?php echo $fetch['Titel']; ?> <?php echo $fetch['Datum'];?></h5>
      <p class="card-text"><?php echo $fetch['Omschrijving']; ?></p>
     </div>
   </div>
</div>

<?php
$nr++; // variabele nummer +1
if ($nr==3) { // als nummer 3 is dan
  echo "</div>"; // sluit de div
  $nr = 0; // nummer is 0
} // sluit de if op regel 48
} // sluit de while op regel 24
?>
<!-- einde kaart -->
</div><br>
<footer id="sticky-footer" class="py-2 bg-dark text-white-50 ">
    <div class="container text-center">
      <p class="#top">Copyright &copy; 2020 <i>Ontworpen door: Mike Driessen</i></p>
    </div>
  </footer>
</background>
