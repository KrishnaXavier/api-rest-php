<!DOCTYPE html>
<html>
<head>
	<title>APIT REST - PHP</title>
	<script src="https://code.jquery.com/jquery-3.3.0.min.js" integrity="sha256-RTQy8VOmNlT6b2PIRur37p6JEBZUE7o8wPgMvu18MC4=" crossorigin="anonymous"></script>
</head>
<body>
	
	<div>
		<h3>Use request(query, method, data) in console. </h3>		
	</div>

	<div>
		Example: 
		<div>request('produto/10', 'GET', {})</div>
	</div>

</body>
<script type="text/javascript">
	
	function request(query, method, data){
		$.ajax({
			method: method,
			url: query,
			data: data
		})
		.done(function( response ) {			
			//console.log(response);
			let resp = JSON.parse(response);			
			console.log( resp );		
		});		
	}

	function testeRequest(){
		request('produto/10', 'GET', {});
	}
</script>
</html>