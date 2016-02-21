<html>
	<head><title>CHAMBAMEX</title> </head>
	<body>
		<form method="POST" action="login">
			NAME: <input type="text" name="email"/>
			<br/>
			<br/>
			PASSWORD: <input type="password" name="password"/>
			<input type="submit"/>
			<input type="hidden" name="_token" value="{{ Session::token() }}" />
		</form>

	</body>
</html>