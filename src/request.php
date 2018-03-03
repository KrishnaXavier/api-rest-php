<!DOCTYPE html>
<html>
<head>
	<title>APIT REST - PHP</title>
	<script src="https://code.jquery.com/jquery-3.3.0.min.js" integrity="sha256-RTQy8VOmNlT6b2PIRur37p6JEBZUE7o8wPgMvu18MC4=" crossorigin="anonymous"></script>
</head>
<body>
</body>
<script type="text/javascript">
	function request(query, method, data){
		$.ajax({
			method: method,
			url: query,
			data: data
		})
		.done(function( msg ) {
			console.log(msg );
		});
	}

	function testeRequest(){
		request('produto/10', 'GET', {});
	}
</script>
</html>