<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>セッションを使ってみよう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>セッションを使ってみよう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<?php 
		if ( isset( $_SESSION["count"] ) == true ) {
			++$_SESSION["count"];
		} else {
			$_SESSION["count"] = 1;
		}
		echo $_SESSION["count"]. "回目のページ表示です。";
		?>
	</div>
</body>
</html>
