<?php include('./inc/header.php') ?>

	<section class="Ajaxloader">
		<div class="contact" id="loader">
			<div class="rightcontact">

				<h1>ارسال پیام</h1>
				<form action="mail.php" method="post" target="ifrm">
					<input type="text" placeholder="نام :" class="name">
					<input type="text" placeholder="ايميل :" class="email">
					<textarea placeholder="پیام :" class="messege"></textarea>
					<input type="submit" value="ارسال" class="but"/>
				</form>
				<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
			</div>
			
		</div>
	</section>
	
<?php include('./inc/footer.php') ?>