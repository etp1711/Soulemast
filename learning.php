<?php include('./inc/header.php') ?>
<section class="middle">
		<div class="learning">
			
						
			<h2>لطفا برای ورود به قسمت آموزش نام کاربری و رمز عبور خود را وارد نمائید .</h2>
			
			
				<?php
					
					
					$name 	 = $pass 	= 123;
					

					
					?>

					
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
					  	<input 	type="text" 	class="name"	name="name" 	placeholder="نام کاربری">
				<!--    <span class="error"> <?php echo $nameErr;?></span>  -->
					   <br><br>
					   <input 	type="text" 	class="pass"	name="pass" 	placeholder="رمز عبور :">
				<!--   <span class="error"> <?php echo $passErr;?></span>	-->
					   <br><br>
					   <input type="submit"	 name="submit"	class="ok"  value="تائید">
					</form>

					<?php
				/*  echo "";
					echo $name;
					echo $nameErr;
					echo $passErr;
					echo "<br>";
					echo $pass;*/
					
					?>	
			
		</div>	
</section>



<?php include('./inc/footer.php') ?>




