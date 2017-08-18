<html>
<body>
<form method="post" action="{{URL::to('/make-url')}}">
<input name="url">
<button type="sybmit"> Make URL </button>
@if($errors->first('url'))
<p> {{{$errors->first('url')}}} </p>
@endif
</form>
@if(Auth::check())
<a href="{{URL::to('auth/logout')}}"> Logout </a>
@endif
</body>
</html>
