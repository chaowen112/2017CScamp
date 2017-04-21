<!DOCTYPE html>
<html>
<head>
	<title>清大資工營留言板 | Message Board of NTHU CS Camp</title>
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	    <link rel="shortcut icon" href="images/short.ico">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Pink Contact Form ,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<!--webfonts-->
<!--link href='http://fonts.useso.com/css?family=Lato:100,300,400,700,100italic,300italic,400italic|Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!--link href='http://fonts.useso.com/css?family=Raleway:400,200,300,500,600,800,700,900' rel='stylesheet' type='text/css'>
	<!--//webfonts-->
	<style>
		div.msg_resent{
			background-color: white;
			color: black;
			margin: 100px 0 20px 0;
			padding: 20px;
			width:50%;
			margin:0px auto;
		}</style>

	</head>
<!-- background-repeat:repeat-y;-->
	<body background=images/board/bg0.jpg style="<width:100%;background-attachment:fixed;background-position:center top">
		<h1 style="color:#FFDEAD"><strong>2017 NTHUCS SUMMER CAMP MSG BOARD</strong></h1>
		<br><!--input type="submit" value="展開" id="open" neme="open" method="post" -->
		<?php
		$dbh = new PDO('mysql:host=localhost;dbname=msg;charset=utf8', 'root', '');

		$sql = "SELECT * FROM `msg` WHERE 1";
		//$row_result = mysqli_query($dbh,$sql) or die('MySQL query error,');

		$sth = $dbh->prepare($sql);
		$sth->execute();
  		//$row_total=mysql_num_rows($sth);//取得資料表資料列數

		$statement=$dbh->query('select * from msg');

		while($result = $sth->fetch(PDO::FETCH_OBJ)){
			echo '<div class="msg_resent" style="display: all;">
			<h2>' . $result->name .'</h2>
			<div class="cart">
				<a target="_blank"href="https://goo.gl/forms/nTtaqUPU2N4xXg2r1"><i class="fa fa-shopping-cart"></i> <span>把握機會</span></a>
			</div>
			<div style="display: all">
				<p>' . $result->msg . '</p>
			</div>
			<p align=right>From:' . $result->ip . '  at:  ' . $result->date  . '</p>
		</div>
		<br><hr style="width:50%;">';
		}
		?>
		<!--div class="msg_resent" style="display: all;">
			<h2>NAME</h2>
			<div class="cart">
				<a target="_blank"href="https://goo.gl/forms/nTtaqUPU2N4xXg2r1"><i class="fa fa-shopping-cart"></i> <span>把握機會</span></a>
			</div>
			<div style="display: all">
				<p>COMMENTS</p>
			</div>
		</div>
		<br><hr style="width:50%;"-->

<!--##########################  THINGS ABOVE HAS TO BE REWRITED IN PHP #######################-->
<!--##########################  THINGS BELOW HAS NO PHP CODE  ################################-->

<div class="login-01">
	<form action="./response.php" method="post">
		<ul>
			<li class="first">
				<a href="#" class=" icon user"></a><input required="true" type="text" class="text" name="name" placeholder="Name (required)">
			</li>
			<li class="first">
				<a href="#" class=" icon email"></a><input type="text" class="text" name="email" placeholder="Email">
			</li>
			<li class="first">
				<a href="#" class=" icon phone"></a><input type="text" class="text" name="phone" placeholder="Phone">
			</li>
			<li class="second">
				<a href="#" class=" icon msg"></a><textarea value="Message" name="message" required="true" placeholder="Comments (required)"></textarea>
			</li>
		</ul>
		<!--a data-flickr-embed="true" data-context="true"  href="https://www.flickr.com/photos/91085392@N05/32415344263/in/album-72157677577714313/" title="DSC_3940-1"><img src="https://c1.staticflickr.com/3/2838/32415344263_1d557efa5c_c.jpg" width="800" height="530" alt="DSC_3940-1"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script></form-->
		<input type="submit" value="Submit" class="first">
		</form>
</div>


<!--start-copyright-->
<div class="copy-right">
	<div class="wrap">
		<p>Copyright &copy;  2017  . NTHUCS All rights reserved.<a target="_blank" href="http://www.nthucs-camp-2017.tk"> cscamp</a></p>
	</div>
</div>
		<!--//end-copyright-->
	</body>
	</html>
