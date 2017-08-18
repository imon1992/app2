<html>
<body>
<form action="{{URL::to('auth/login')}}" method="post">
<input name="email">
<input type="password"  name="password">

<button type="submit">Login</button>
</form>

<p> or <a href="{{URL::to('auth/register')}}"> Register </a> </p>
</body>
</html>
