<?php
include "db.php";


?>

<?php
//creat select query

$query = "select * from shouts order by id ";

$shouts = mysqli_query($con,$query);


?>

<!Doctype html>
<html>
<head>
	<title>Shout It</title>
	<link rel ="stylesheet" href ="css/style.css" type ="text/css">
</head>
<body>
	<div id ="container">
		<header>
			<h1>SHOUT IT! shoutbox</h1>
		</header>
	<div id ="shouts">
		<ul>
			<?php while($row = mysqli_fetch_assoc($shouts)):?>
			
				<li class ="shout"><span><?php echo $row['time']?>-</span><b> <?php echo $row['user']?></b>:<?php echo $row['message']?></li>
					
				<?php
			
			endwhile;
			?>	
				
				
				
			
			
			
			
			
		</ul>
	</div>
	<div id ="input">
		<?php
		
		if(isset($_GET['error'])):?>
		
		<div class ="error" > <?php echo $_GET['error'];?></div>
		<?php
		endif;
		?>
		<form method ="post" action ="process.php">
			<input type ="text" name= "user" placeholder ="Enter your name">
			<input type= "text" name ="message" placeholder = "Enter A Message">
			<br>
			<input class ="shout-btn" type ="submit" name ="submit" value ="Shout It Out">	
			
		</form>	
</body>
</html>