<?
header( 'Content-type: text/html; charset=utf-8' );
?>
<html>
<head>
	<title>Paint test</title>
	<style type="text/css">
	#page{overflow:hidden;background:green;margin:10px auto;width:600px;border:1px solid red;}
	header,
	footer,
	#main{
		background:gray;
		color:blue;
		width:300px;
		margin:30px auto;
		padding:10px;
		border:2px solid yellow;
	}
	</style>
</head>
<body>
	<div id="page">
		<header>Lorem</header>
<?php
$lesspain = isset($_GET["less"]) || "";

echo 'Begin ...<br />';

for( $i = 0 ; $i < 10 ; $i++ )
{
    echo $i . '<br />';
    if(!empty($lesspain)){
	    flush();
	    ob_flush();
    }
    sleep(1);
}
echo 'End ...<br />';
?>
		<div id="main">

		</div>
		<footer>

		</footer>
	</div>

</body>
</html>