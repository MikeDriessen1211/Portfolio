<!DOCTYPE html>
<html lang="NL">
<head>
	<meta http-equiv="Content-Type"
	content="text/html;
	charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="portfolio.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Portfolio</title>
</head>
<body>
<div class="header">
    <img src="afbeeldingen/LogoPortfolio.png">
</div>
<!--Navbar-->
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	  <ul class="navbar-nav">
		<li class="nav item"><a href="?menu=Home" class="nav-link">Home</a></li>
		<li class="nav item"><a href="?menu=OverMij" class="nav-link">CV</a></li>
		<li class="nav item"><a href="?menu=Projecten" class="nav-link">Projecten</a></li>
		<li class="nav item"><a href="?menu=Toevoegen" class="nav-link">Toevoegen</a></li>
	</nav>
<?php
    if(isset($_GET['menu'])){
      switch($_GET['menu']){
        case 'Home':
        include_once("portfolio.html");
        break;
        case "OverMij":
        include_once("OverMij.html");
        break;
				case "Projecten":
				include_once("portfolio2.php");
				break;
				case "Toevoegen":
				include_once("toevoegen.php");
				break;
        default:
        include_once("portfolio.html");
        break;
      }
    }
    ?>
		</body>
</html>
