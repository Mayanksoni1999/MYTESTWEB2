<?php 
	header('Access-Control-Allow-Origin: *'); 
?>

<html>
<head>
	<title>Test</title>
</head>

<script type="text/javascript">
	function okfunt(){
		query = "CH"
        	document.getElementById('respt').innerHTML = query;
	}
</script>

<body>
	
	<h1>
		Hii
	</h1>
	<h2> 
		This is a test web.
	</h2>
	
	<h1 id="respt">Demo Text should come here</h1>

	<button onclick="okfunt()">Click</button>
		
	
</body>
</html>
