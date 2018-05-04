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
		Examples: 
		<div>request('produto', 'GET', {})</div>
		<div>request('produto/2', 'GET', {})</div>		
		request('produto', 'POST', {'nome':'camisa classic - 12 - editado', 'valor':'49,90', 'tipo':'roupa', 'acao':'insert'})
		<div>request('produto/5', 'DELETE', {})</div>
		<div>request('produto/12', 'PATCH', {'nome':'camisa classic - 12 - editado', 'valor':'49,90', 'tipo':'roupa', 'acao':'update'})</div>		
	</div>

</body>
<script type="text/javascript">
	var varj1;
	var varj2;

	function request(query, method, data){

		if(method == "PATCH" || method == "PUT"){
			method = "POST";
		}


		$.ajax({
			method: method,
			url: query,
			data: data
		})
		.done(function( response ) {			

			varj1 = response;

			//console.log(response);
			let resp = JSON.parse(response);			
			console.log( resp );		

			varj2 = resp;
		});		
	}

	function testeRequest(){
		request('produto/10', 'GET', {});
	}
</script>
</html>