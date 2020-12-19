<?php 
	header('Access-Control-Allow-Origin: *'); 
?>

<html>
<head>
	<title>Test</title>
</head>

<script type="text/javascript">
	function okfunt(){
		query = "C#C"
        console.log(query)
		//getting chikey
		var request = new XMLHttpRequest();
		var params = 'smiles='+query;
		request.open("POST","https://www.chemspider.com/InChI.asmx/SMILESToInChI",true);
		request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//create callback for success containing the response
		request.success = function(response) {
		    console.log(response);
		    document.getElementById("respt").value = response;
		};
		//and a fail callback containing the error
		request.fail = function(error) {
		    console.log(error);
		};
		request.send(params);

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