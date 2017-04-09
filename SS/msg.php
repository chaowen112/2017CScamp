<?php
/*
echo $result->id . $result->first;
$result = $sth->fetch(PDO::FETCH_OBJ);
echo $result->id . $result->first;
echo $sth->execute();
foreach($statement as $row){
    echo $row['id']." ".$row['first']."<br>";
}
echo"<pre>";
print_r($sth->fetchALL(PDO::FETCH_ASSOC));
echo"</pre>";

$dbh = NULL;
*/
//mysql_escape_string
//header("Location: http://nthucs-camp-2017.tk/msg.php");
//die;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Message Board</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background="images/slider/bg1.jpg23">
<br><br><br><br>

<div class="container">
	<h3 class="text-center"><strong>留言板<strong></h3>
	<hr>
	<div class="panel panel-default">
	<?php
	$dbh = new PDO('mysql:host=localhost;dbname=msg;charset=utf8', 'root', '');

	$sql = "SELECT * FROM `msg` WHERE 1";
	$sth = $dbh->prepare($sql);

	//$sth->execute(array($id, $first));
	$sth->execute();

	$statement=$dbh->query('select * from msg');
	for($i=0; $i<6; $i++){
		$result = $sth->fetch(PDO::FETCH_OBJ);
		echo "<div class='panel-heading'>id : " . $result->id . "<span class='pull-right'></span></div>
		<div class='panel-body'> 內容 : <p word-wrap:break-word>" . $result->msg ."</p></div>";
	}
		// 讀取是否有留言

			// 如果有，開始逐一列出留言內容

		// 如果沒有，顯示「沒有任何留言」的訊息
		//echo "<p class=\"text-center\">沒有任何訊息！</p>"

	?>
		</div>
	<!-- 以下是一篇留言應該顯示的內容範本 -->
	<p > I've tried checking other answers, but I'm still confused--especially after seeing W3schools HTML 5 reference.

I thought HTML 4.01 was supposed to "allow" single-tags to just be <img> and <br>. Then XHTML came along with <img /> and <br /> (where someone said that the space is there for older browsers).

Now I'm wondering how I'm supposed to format my code when practicing HTML 5.</p>

	<!-- 以上是一篇留言應該顯示的內容範本 -->

	<hr>
	<!--p class="pull-right">以 [登入者的姓名] 的身份留言</p-->
	<h4 style="color:white; font-family:"標楷體"" class="text-center"><strong>新增留言</strong></h4>
	<form action="msg-add.php" method="post">
		<input type="text" id="guest_name" name="guest_name" placeholder="暱稱" required="true">
		<h6></h6>
		<textarea name="msg" class="form-control" placeholder="請輸入留言" required="true" style="height:100px"></textarea>
		<br>
		<input type="submit" name="submit" value="送出" class="btn btn-primary btn-sm pull-right" >
	</form>
</div>

</body>
</html>
