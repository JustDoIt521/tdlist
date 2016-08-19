<!DOCTYPE html>
<html ng-app="myapp">
	<head>
		<meta http-equiv="Content_type" content="text/html:charset=utf-8">
		<script src="http://apps.bdimg.com/libs/angular.js/1.4.6/angular.min.js"></script>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="face.css"  type="text/css"> 
	</head>
	<body ng-controller="test">
		<div id="whole">
			<div id="Hmiddle">
				<div id="MiddleU">
					T D L I S T
				</div>
				<div id="MiddleM">
					<p>Plan,Do And Finish</p>
				</div>
			</div>
				<div id="MiddleD">
					<?php
					require("button.html");
					//require("register.html");
					?>
				</div>	
		</div>
		<script type="text/javascript" src="faceNg.js">			
		</script>
	</body>
</html>