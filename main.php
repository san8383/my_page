<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Personal css -->
    <link href="style.css" rel="stylesheet">
    <title>My page</title>
  </head>
  <body>
  	<?php include_once 'nav.inc.php';?>
  	<div class="container-xxl">
  		  	<h1><?php echo $p; ?></h1>
  		  	<div class="col">
			      <img class="img rounded" src="img/image.jpg" class="rounded float-start" alt="...">
			    </div>
  	</div>

  	<div class="container-xxl my-md-4 bd-layout">
  		
  		  	<div class="row">
			    
			    <div class="col">
			    	<h6>Обо мне :</h6>
			     	<p> Меня зовут <?php echo $surname,' ', $name;?> <p> 			<!-- используем вывод строк через запятую -->
			      <p> Я живу в городе <?php print($city);?> </p> 						<!-- вывод одной переменной посредством print -->
			      <p> Мне <?php echo $b_day->getAge().' лет и родился я '.$b_day->getDay().'-го '.$b_day->getMonth('ru',TRUE);?> </p> 			<!-- используем конкатенацию -->
			      <p> Но если бы <?php echo 'я родился в '.$another_date->getYear().' году и это был '.$another_date->getMonth('ru').', а по английски - '.$another_date->getMonth('en').', например '.$another_date->getDay().'-го '.$another_date->getMonth('ru',TRUE).', то мне было бы '.$another_date->getAge() ?> <br>
			    	</p>
			      <p class="text-muted">И да, все вычисления, вывод дат и склонение месяцов сделано с помощью класса и создаваемых на его основе объектов.</p>
			    </div>
			    <div class="col">
			    	<div class="knowledge">
			    		<h6>Немного математики :</h6>
				      <?php
				      include 'knowledge.inc.php';
				      echo '<p>'.${$a}.' = '.$a.'</p>' ; 
				      echo '<p>'.${$b}.' = '.$b.'</p>' ; 
				      echo '<p>'.in_range($number, $a, $b).'</p>' ;
				      echo '<p> а вот '.in_range($number_another, $a, $b).'</p>' ;
				      ?>
				    </div> 
			    </div>
		  	</div>
    	
    </div>
 		<?php include_once 'footer.inc.php';?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>