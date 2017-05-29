<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script>
		var ourRequest = new XMLHttpRequest();
		ourRequest.open('GET','https://jsonplaceholder.typicode.com/comments');
		ourRequest.onload=function(){
			var abc=ourRequest.responseText;
			document.write(abc);
		};
		ourRequest.send();


	</script>
</body>
</html>