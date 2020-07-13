<?php
include_once("db.php");

$melding="";
if(isset($_POST['pass'])&&$_POST['pass']=='yeet'){
  $titel = $_POST['Titel'];
  $verhaaltje = $_POST['Omschrijving'];
  $datum = $_POST['Datum'];
  $db = new Database("localhost", "root", "", "portfolio");
  if($_FILES['Plaatje']['tmp_name']!=""){
    $foto = addslashes(file_get_contents($_FILES['Plaatje']['tmp_name']));
  }else{$foto="";}
  //$sql = "INSERT INTO `projecten` (`Titel`, `Omschrijving`, `Datum`, `Plaatje`) VALUES('".$titel."', '".$verhaaltje."', '".$datum."','".$foto."')";
  if($sql=$db->Insert("projecten","`Titel`, `Omschrijving`, `Datum`, `Plaatje`", "'".$titel."', '".$verhaaltje."', '".$datum."','".$foto."'")){
    $melding = "<div class='alert alert-success'>succes</div>";
  }else{ // false
    $melding = "<div class='alert alert-danger'>".$sql."Er is iets fout gegaan</div>";
  }
}
echo $melding;
 ?>

 <head>
   <link rel="stylesheet" href="css\style.css">
 </head>
<background2><br/>
 <form action="" method="post" enctype="multipart/form-data" >
   <div class="col-lg-7 mx-auto">
     <div class="border border-light">
     <div class="card-header p-0 mx-auto ">
       <div class="bg-primary text-white text-center py-1">
         <h3>Toevoegen</h3>
         <p class="m-0">Voeg een project toe</p>
      </div>
    </div>
 <label>Titel:</label><input type="text" name='Titel' placeholder="Titel..." class="form-control" /><br/>
 <label>Verhaaltje:</label><textarea placeholder="Schrijf je verhaaltje..." class="form-control" rows="5" id="comment" name='Omschrijving'></textarea>
 <small class="form-text text-muted">Ik zal je verhaaltje niet online zetten hoor ;)</small><br/>
 <label>Datum:</label><input type="date" name='Datum' class="form-control" value="<?php echo date("Y-m-d");?>"/>
 <input type="file" name='Plaatje'/></br></br>
 <input placeholder="Wachtwoord..." type="text" name='pass' class="form-control"/>
 <button type="submit" class="btn btn-primary col-lg-12">Stuur verhaaltje</button>
</div>
</div>
</form>
<br/>
</background2>
 <footer id="sticky-footer" class="py-2 bg-dark text-white-50">
     <div class="# text-center">
       <p class="moetff">Copyright &copy; 2020<i>Ontworpen door: Mike Driessen</i></p>
     </div>
</footer>
