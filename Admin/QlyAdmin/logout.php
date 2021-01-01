<?php
session_start();

unset($_SESSION["username1"]);


echo "
	<script language='javascript'>
		alert('Bạn đã đăng xuất !');
		window.open('login.php','_self', 1);
	</script>
	";
?>