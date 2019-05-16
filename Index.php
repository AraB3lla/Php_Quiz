<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Quiz</title>
</head>
<body style="text-align: center;" style='background-image: url("images/art.jpg");'>

<nav class="navbar navbar-dark bg-dark" style="width: 100%;">
      <h1><a class="navbar-brand" style="color: red;"> Quizzes 4 Kids</a></h1>
      <form class="form-inline">
         <input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="Search" >
         <button class="btn btn-outline-success my-2 my-sm-0" style="color: red;" type="submit">More Quizzes</button>
      </form>
   </nav>
<br><br>
<form action="Index.php" method="post">  

<?php
	$total = 0;
//Questions and choices
$Quiz = array
(
array('q' => "What colour are grapes?",'Pink','orange','yellow','purple'),
array('q' => "What is the colour of a ripe banana?",'pink','green','purple','yellow'),
array('q'=> "What colour is the sun?",'pink','red','yellow','white'),
array('q'=> "What is the colour of the ocean?",'pink','orange','purple','transparent'),
array('q'=>"What is the colour of a ruby?",'pink','brown','gold','red'),
array('q'=>"What is the colour of a Jasper?",'orange','red','black','green'),
array('q'=>"what is the colour of an emereld?",'purple','orange','pink','light green'),
array('q'=>"What is the colour if an amethyst",'pink','green','black','light purple'),
array('q'=>"what is the colour of the sky?",'white','blue','black','transparent'),
array('q'=>"what is the colour of a ripe lemon?",'green','orange','pink','yellow'),
array('q'=>"What colour are strawberries?",'yellow','green','white','red'),
array('q'=>"Which animal has black and white stripes?",'Lion','kangaroo','hippo','zebra'),
array('q'=>"What does red and blue make when mixed together?",'orange','green','black','purple'),
array('q'=>"What colour was Red Riding Hoods coat?",'pink','green','orange','red'),
array('q'=>"What colour is elsa from Frozens hair?",'blonde','black','white','orange'),
array('q'=>"Green is made of which two colours?",'Red & blue','Yellow & Red','Blue & Orange','Yellow & Blue'),
array('q'=>"What colour are flamingo's feathers?",'blue','red','purple','pink'),
array('q'=>"What colour is often linked to love?",'blue','black','green','red'),
array('q'=>"What colour is the whatsapp logo?",'blue','yellow','red','green'),
array('q'=>"Is white a colour?",'What?','yes','maybe','no')

);
?>

<?php

//loop for the questions and choices
for ($row = 0; $row < count($Quiz); $row++) { ?>
<section class="box">

<p>
  <h2>
	<?php
	//loop for Questions
	 echo $Quiz[$row]['q'];?>
  </h2>
</p>

<?php 
$x = 0;
	
//loop for radio buttons
for($r = $row*4; $r < ($row+1)*4; $r++){
  ?>
  <input type='radio' name="<?php echo $row; ?>" value="<?php echo $x ?>" id="<?php echo $r ?>">
	<label class="option" for="<?php echo $r ?>">
	<?php echo $Quiz[$row][$x] ?></label>
			<?php
					$x++; 
		
		} ?>
		<?php 
		
		?>
	
			</section>
		</section>

	<?php }
?>

<?php


if(isset($_POST['submit'])){



		if(isset($_POST['0'])){
			if($_POST['0'] == 3){
			$total++;
			}
		}

		if(isset($_POST['1'])){
			if($_POST['1'] == 3){
			$total++;
			}
		}
		if(isset($_POST['2'])){
			if($_POST['2'] == 3){
			$total++;
			}
		}
		if(isset($_POST['3'])){
			if($_POST['3'] == 3){
			$total++;
			}
		}
		if(isset($_POST['4'])){
			if($_POST['4'] == 3){
			$total++;
			}
		}
		if(isset($_POST['5'])){
			if($_POST['5'] == 3){
			$total++;
			}
		}
		if(isset($_POST['6'])){
			if($_POST['6'] == 3){
			$total++;
			}
		}
		if(isset($_POST['7'])){
			if($_POST['7'] == 3){
			$total++;
			}
		}
		if(isset($_POST['8'])){
			if($_POST['8'] == 3){
			$total++;
			}
		}
		if(isset($_POST['9'])){
			if($_POST['9'] == 3){
			$total++;
			}
		}
		if(isset($_POST['10'])){
			if($_POST['10'] == 3){
			$total++;
			}
		}
		if(isset($_POST['11'])){
			if($_POST['11'] == 3){
			$total++;
			}
		}
		if(isset($_POST['12'])){
			if($_POST['12'] == 3){
			$total++;
			}
		}
		if(isset($_POST['13'])){
			if($_POST['13'] == 3){
			$total++;
			}
		}
		if(isset($_POST['14'])){
			if($_POST['14'] == 3){
			$total++;
			}
		}
		if(isset($_POST['15'])){
			if($_POST['15'] == 3){
			$total++;
			}
		}
		if(isset($_POST['16'])){
			if($_POST['16'] == 3){
			$total++;
			}
		}
		if(isset($_POST['17'])){
			if($_POST['17'] == 3){
			$total++;
			}
		}
		if(isset($_POST['18'])){
			if($_POST['18'] == 3){
			$total++;
			}
		}
		if(isset($_POST['19'])){
			if($_POST['19'] == 3){
			$total++;
			}
		}
		if(isset($_POST['20'])){
			if($_POST['20'] == 3){
			$total++;
			}
		}
	
}


echo "<h3> Your score is:"."<br>"."$total"."/20 </h3>";


 if($total >= 0 && $total <= 5){
	echo "<h3> Try again </h3>";
}
else if($total >=6 && $total <= 10){
	echo "<h3> Good, but you can do better. </h3>";
}
else if($total >= 11 && $total <= 20){
	echo "<h3> Good job!</h3>";
}
?>


<br>

<section>
		<h2>Click Submit For Results!</h2>
			<input id="submit" type="submit" name="submit" value="Submit!">
	</section>
	</form>
	<br>

    
</body>
</html>